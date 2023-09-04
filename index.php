<!DOCTYPE html>
<html>
    <head>
        <title>lab_1</title>
        <meta charset="UTF-8"></meta>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    </head>
    <body>
        <div id="header">
            <div>
                <img id="avatar" src="images\photo_2023-02-26_00-39-08.jpg" alt="avatar" style="width: 5%;height: 5%;border-radius: 50%;">
            </div>
            <div>
                <h3>Бессонов Владимир Юрьевич<br>P3112<br>2208</h3>
            </div>
        </div>
        <form id="form" action="http://localhost:63342/lab_1/index.php" method="GET">
            <p>Ввод X:
                <br>-4: <input type="checkbox" name="val_x" value="-4">
                <br>-3: <input type="checkbox" name="val_x" value="-3">
                <br>-2: <input type="checkbox" name="val_x" value="-2">
                <br>-1: <input type="checkbox" name="val_x" value="-1">
                <br>0: <input type="checkbox" name="val_x" value="0">
                <br>1: <input type="checkbox" name="val_x" value="1">
                <br>2: <input type="checkbox" name="val_x" value="2">
                <br>3: <input type="checkbox" name="val_x" value="3">
                <br>4: <input type="checkbox" name="val_x" value="4">
            </p>
            <p>Ввод Y:
                <input id="y_field" type="text" name="val_y">
            </p>
            <p>Ввод R:
                <br>1: <input type="checkbox" name="val_r" value="1">
                <br>1.5: <input type="checkbox" name="val_r" value="1.5">
                <br>2: <input type="checkbox" name="val_r" value="2">
                <br>2.5: <input type="checkbox" name="val_r" value="2.5">
                <br>3: <input type="checkbox" name="val_r" value="3">
            </p>
            <br><input id="submit" type="submit" value="Отправить">
            <span role="alert" id="error" aria-hidden="true">
                Please enter First Name
            </span>
        </form>
        <script src="main.js"></script>
<!--        <script>-->
<!--            const submit = document.getElementById("submit");-->
<!---->
<!--            submit.addEventListener("click", validate);-->
<!---->
<!--            function validate(e) {-->
<!--                e.preventDefault();-->
<!---->
<!--                const yField = document.getElementById("y_field");-->
<!--                let valid = true;-->
<!---->
<!--                if (!yField.value) {-->
<!--                    const nameError = document.getElementById("error");-->
<!--                    nameError.classList.add("visible");-->
<!--                    yField.classList.add("invalid");-->
<!--                    nameError.setAttribute("aria-hidden", false);-->
<!--                    nameError.setAttribute("aria-invalid", true);-->
<!--                }-->
<!--                return valid;-->
<!--            }-->
<!---->
<!--        </script>-->
<!--        <script src="main.js"></script>-->
    </body>
</html>