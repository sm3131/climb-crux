import Editor from '@toast-ui/editor'
import '@toast-ui/editor/dist/toastui-editor.css';

const createEditor = new Editor({
    el: document.querySelector('#createEditor'),
    height: '400px',
    initialEditType: 'markdown',
    previewStyle: 'tab',
    usageStatistics: false
});

document.querySelector('#createPostForm').addEventListener('submit', e => {
    e.preventDefault();
    document.querySelector('#content').value = createEditor.getMarkdown();
    e.target.submit();
});