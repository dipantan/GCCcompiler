<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GCC Compiler</title>
</head>

<body>
    <h3>Enter your code here:</h3>
    <textarea id="input_text" cols="50" rows="10">
        </textarea>
    <Button type="submit" onclick="method()">Submit</Button>
    <script>
        const method = async () => {
            var xhr = new XMLHttpRequest();
            var text = document.getElementById('input_text').value;
            var params = 'input_text='+text;
            var url = "result.php";
            xhr.open("POST", url, true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var response = this.response;
                    alert(response);
                }
            }
            xhr.send(params);
        }
    </script>

</body>

</html>