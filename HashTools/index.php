<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HashTools</title>
</head>

<body>

<h3>Combien de caractère ?</h3>

<form>
    <input type="number">
</form>

<script>

    class StringIdGenerator {
        constructor(chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ') {
            this._chars = chars;
            this._nextId = [0];
        }

        next() {
            const r = [];
            for (const char of this._nextId) {
            r.unshift(this._chars[char]);
            }
            this._increment();
            return r.join('');
        }

        _increment() {
            for (let i = 0; i < this._nextId.length; i++) {
            const val = ++this._nextId[i];
            if (val >= this._chars.length) {
                this._nextId[i] = 0;
            } else {
                return;
            }
            }
            this._nextId.push(0);
        }

        *[Symbol.iterator]() {
            while (true) {
            yield this.next();
            }
        }
    }

    const ids = new StringIdGenerator();
    const xhttp = new XMLHttpRequest();

    for (let i = 0; i < 0; i++) {
        task(i);
    }

    function task(i) {
        setTimeout(function () {
            var nextid = ids.next();
            
            console.log(nextid);
            xhttp.open("GET", "request.php?originalchar=" + nextid);
            xhttp.send();
        }, 50 * i);
    }

</script>

</body>

</html>