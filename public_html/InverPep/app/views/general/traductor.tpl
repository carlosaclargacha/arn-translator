{include file= "../masterPage/template.tpl"}
{include file= "../layouts/inc/header_typep.tpl"}

<main class="detalle">
    <div class="row">
        <div class="csc-header csc-header-n1 col-xs-12">
        <h2 p align="center" style="margin-top:0"> Traductor </p></h2>
        </div>
    </div>

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

        <div class="row">

            
            <div class="col-md-6">
                <button type="button" 
                    class="btn btn-primary btn-lg btn-block"
                    onclick="return transformAmino();">Traducir</button>
            </div>
            <div class="col-md-6">

                <!--
                <button type="button" class="btn btn-secondary btn-lg btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Action
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
                -->

                <div class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown trigger</a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                        <li>Sup</li>
                        <li>Whats</li>
                        <li>Up</li>
                    </ul>
                </div>
            </div>


        </div>
        
    </form>
</main>

{include file= "../layouts/inc/footer.tpl"}

<script src="{URL::to('/')}/assets/js/arn-translator.js"></script>