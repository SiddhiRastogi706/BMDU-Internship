<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Test Cloudinary Upload</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 40px 15px;
        }

        .upload-box {
            max-width: 500px;
            margin: auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
        }

        input {
            display: block;
            width: 100%;
            margin: 20px 0;
        }

        button {
            border: 0;
            background: #111111;
            color: #ffffff;
            padding: 12px 22px;
            border-radius: 6px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="upload-box">
        <h1>Cloudinary Upload Test</h1>

        <form
    action="/conquer11/process-cloudinary-upload"
    method="POST"
    enctype="multipart/form-data"
>
    <label for="image">Select image</label>

    <input
        type="file"
        id="image"
        name="image"
        accept=".jpg,.jpeg,.png,.webp"
        required
    >

    <button type="submit">
        Upload Image
    </button>
</form>
    </div>
</body>
</html>