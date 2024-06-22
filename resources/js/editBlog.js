import Editor from '@toast-ui/editor'
import '@toast-ui/editor/dist/toastui-editor.css';

let originalContent = document.querySelector('#originalContent').value;

const editEditor = new Editor({
    el: document.querySelector('#editEditor'),
    height: '400px',
    initialEditType: 'markdown',
    previewStyle: 'tab',
    initialValue: originalContent,
    usageStatistics: false
});

document.querySelector('#editPostForm').addEventListener('submit', e => {
    e.preventDefault();
document.querySelector('#content').value = editEditor.getMarkdown();
    e.target.submit();
});