<head>
    <script>
        function handleChange(e) {
            const file = e.target.files[0]
            const reader = new FileReader()
            reader.onload = (event) => {
                console.log(event);
                var img = document.createElement("img");
                img.src = event.target.result;
                var root = document.querySelector("body");
                root.appendChild(img);
                fetch(event.target.result)
                    .then(res => res.blob())
                    .then(console.log)

            }

            //reader.readAsText()
            reader.readAsDataURL(file);
        }

    </script>

</head>

<body>
<form method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="img" onchange="handleChange(event)">

    <input type="submit">
</form>
</body>
