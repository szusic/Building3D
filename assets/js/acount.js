const radioButtons = document.querySelectorAll('input[type="radio"]');
const popupContent = document.getElementById('popup-content');
const popupText = document.getElementById('popup-text');
const submitButton = document.getElementById('submit-button');


radioButtons.forEach(radioButton => {
    radioButton.addEventListener('change', () => {
        if (radioButton.checked) {
            switch (radioButton.value) {
                case 'Entry-level':
                    popupText.innerHTML = "<span style='font-weight: bold'>Submission instructions:</span> " +
                        "For the <span style='color: red'>Entry-level</span> benchmark, all results must be provided in the root" +
                        " directory of a zip file using the format described in the <a href='https://github.com/geospatial-lab/Building3D'>github</a>.";
                    submitButton.value = 'Entry_level'
                    break;
                case 'Tallinn':
                    popupText.innerHTML = "<span style='font-weight: bold'>Submission instructions:</span> " +
                        "For the <span style='color: red'>Tallinn</span> benchmark, all results must be provided in the root" +
                        " directory of a zip file using the format described in the <a href='https://github.com/geospatial-lab/Building3D'>github</a>.";
                    submitButton.value = 'Tallinn'
                    break;
                default:
                    popupText.textContent = 'ERROR';
            }

            popupContent.style.display = 'block';
        } else {
            popupContent.style.display = 'none';
        }
    });
});

function uploadFile() {
    var fileInput = document.getElementById('fileInput');
    fileInput.click();
    fileInput.addEventListener('change', handleFileSelection);
}

function handleFileSelection() {
    var fileInput = document.getElementById('fileInput');
    var uploadProgress = document.getElementById('uploadProgress');

    var files = fileInput.files[0];
    if (!files) {
        alert("No files selected.");
        return;
    }
    const file_name = document.getElementById('file_name');
    const progress = document.getElementById('uploadProgress');
    file_name.innerHTML = files.name
    file_name.style.display = 'inline-block';  // Set display to 'inline-block'
    file_name.style.textAlign = 'center';
    progress.style.display = 'inline-block';
    progress.style.margin = 'auto';

    var formData = new FormData();
    formData.append('file', files);

    var xhr = new XMLHttpRequest();

    xhr.upload.addEventListener('progress', function(event) {
        if (event.lengthComputable) {
            var percentComplete = (event.loaded / event.total) * 100;
            uploadProgress.value = percentComplete;
        }
    });

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            // 文件上传完成，可以在这里处理服务器的响应
            console.log(xhr.responseText);
        }
    };

    xhr.open('POST', 'upload.php', true); // 请将 'upload.php' 替换为你的 PHP 后端处理文件上传的脚本
    xhr.send(formData);

    // 清空文件输入框的值，以便下次选择相同文件时触发 change 事件
    fileInput.value = '';
}