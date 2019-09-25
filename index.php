<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Amino-ARN-ADN Traductor</h1>
        </div>

        <div class="container">
            <form>
                <div class="form-group">
                    <label for="aminoTextInput">Aminoacidos</label>
                    <textarea class="form-control" id="aminoTextInput" rows="3"
                        style="text-transform:uppercase; letter-spacing: 4px;"
                        onkeypress="return validateEntry(event);"></textarea>
                </div>
                <div class="form-group">
                    <label for="aminoTextInput">ARN</label>
                    <textarea class="form-control" id="arnTextInput" rows="3" placeholder="Traduccion ARN aqui" readonly></textarea>
                </div>
                <div class="form-group">
                    <label for="aminoTextInput">ADN</label>
                    <textarea class="form-control" id="adnTextInput" rows="3" placeholder="Traduccion ADN aqui" readonly></textarea>
                </div>
                <button type="button" 
                        class="btn btn-primary btn-lg btn-block"
                        onclick="return transformAmino();">Traducir</button>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.3.6/require.js" integrity="sha256-lIXwkX+X/PT2Ol6jZSAP/VfxI/RROCovmhrS4v1RrJs=" crossorigin="anonymous"></script>
        
        <script src="arn-translator.js"></script>
        
    </body>
</html>


