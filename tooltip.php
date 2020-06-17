<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .tooltip {
        width: 148px;
        border: 1px solid #E1E1E1;
        border-radius: 5px;
        position: relative;
        margin: 50px;
        z-index: 2;
    }
    .tooltip::before {
        content: '';
        position: absolute;
        right: 20px; top: -6px;
        width: 10px;
        height: 10px;
        transform: rotate(45deg);
        background: #fff;
        border-left: 1px solid #E1E1E1;
        border-top: 1px solid #E1E1E1;
        z-index: 1;
    }
    ul {
        margin: 0;
        position: relative;
        overflow: hidden;
        z-index: 2;
        border-radius: 5px;
        padding: 3px 0 0 0;
    }
    li {
        list-style-type: none;
        padding: 15px;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        text-align: left;
        color: #777777;
        cursor: pointer;
    }
    li:hover {
        background: #F7F8F9;
        color: #000;
    }
    li:not(:last-of-type) {
        border-bottom: 1px dashed #E1E1E1;
    }
</style
<body>
    <div class="tooltip">
        <ul>
            <li>Account settings</li>
            <li>Log out</li>
        </ul>
    </div>

</body>
</html>