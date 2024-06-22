<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::query()
            ->orderBy('show_first', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        return view('blog.blog', ['blogs' => $blogs, 'title' => 'Blog']);
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstorfail();

        $blogCreatedDate = Carbon::parse($blog->created_at)
            ->setTimezone('America/Phoenix')
            ->toFormattedDateString();

        $blogUpdatedDate = Carbon::parse($blog->updated_at)
            ->setTimezone('America/Phoenix')
            ->toFormattedDateString();

        return view('blog.post', ['blog' => $blog, 'createdDate' => $blogCreatedDate, 'updatedDate' => $blogUpdatedDate, 'title' => 'Blog Post']);
    }

    public function create()
    {
        return view('blog.create', ['title' => 'Create Blog Post']);
    }

    public function store(Request $request)
    {
        $validatedRequest = $request->validate([
            'slug' => ['required', 'string', 'max:255'],
            'image_url' => ['required', 'string', 'max:255'],
            'image_alt' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:255'],
            'content' => ['required'],
            'show_first' => ['sometimes'],
            'show_updated_at_date' => ['sometimes'],
        ]);

        if ($request->has('show_first')) {
            $validatedRequest['show_first'] = $request->boolean('show_first');
            Blog::query()->update(['show_first' => 0]);
        } else {
            $validatedRequest['show_first'] = $request->boolean('show_first');
        }

        if ($request->has('show_updated_at_date')) {
            $validatedRequest['show_updated_at_date'] = $request->boolean('show_updated_at_date');
        } else {
            $validatedRequest['show_updated_at_date'] = $request->boolean('show_updated_at_date');
        }

        Blog::create($validatedRequest);

        return redirect('/blog')->with('success', 'Blog created successfully!');
    }

    public function admin()
    {
        $blogs = Blog::query()
            ->orderBy('show_first', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('blog.admin', ['blogs' => $blogs, 'title' => 'Blog Admin']);
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);

        return view('blog.edit', ['blog' => $blog, 'title' => 'Blog Edit']);
    }

    public function update(Request $request, $id)
    {
        $validatedRequest = $request->validate([
            'slug' => ['required', 'string', 'max:255'],
            'image_url' => ['required', 'string', 'max:255'],
            'image_alt' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:255'],
            'content' => ['required'],
            'show_first' => ['sometimes'],
            'show_updated_at_date' => ['sometimes'],
        ]);

        if ($request->has('show_first')) {
            $validatedRequest['show_first'] = $request->boolean('show_first');
            Blog::query()->update(['show_first' => 0]);
        } else {
            $validatedRequest['show_first'] = $request->boolean('show_first');
        }

        if ($request->has('show_updated_at_date')) {
            $validatedRequest['show_updated_at_date'] = $request->boolean('show_updated_at_date');
        } else {
            $validatedRequest['show_updated_at_date'] = $request->boolean('show_updated_at_date');
        }

        Blog::findOrFail($id)->update($validatedRequest);

        return redirect("blog/" . $request->slug)->with('success', 'Blog updated successfully!');
    }

    public function destroy($id)
    {
        Blog::findOrFail($id)->delete();

        return redirect("blog-admin");
    }
}
