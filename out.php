<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Folder</title>
</head>
<body>

<input type="file" id="fileInput" webkitdirectory directory multiple>
<button onclick="openFolder()">Open Folder</button>

<script>
    function openFolder() {
        var fileInput = document.getElementById('fileInput');
        fileInput.click(); // 模拟点击文件输入框
    }
</script>

</body>
</html>
