<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="footer" style="display:inline-table;">
        <p>پارسنشر&copyتمامی حقوق محفوظ است</p>
        <p>ساخته شده توسط تقی پور</p>
        <p>از سال 2025 تا
        <p id="date"></p>
        </p>
    </div>
</body>

</html>
<script>
    const dateElement = document.getElementById('date');
    const currentYear = new Date().getFullYear();
    dateElement.textContent = currentYear;
</script>