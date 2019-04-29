<h3 style="text-align:center;margin-top:2rem;font-weight:bold;">Calculos Matemáticos</h3>
<div class="row">
    <div class="col-md-6">
        <div class="main">
            <form name="form">
                <input class="textview" name="textview" />
            </form>
            
            <table>
                <tr>
                    <td><input class="button" type="button" value="C" onclick="clean()" /></td>
                    <td><input class="button" type="button" value="<" onclick="back()" /></td>
                    <td><input class="button" type="button" value="/" onclick="insert('/')" /></td>
                    <td><input class="button" type="button" value="x" onclick="insert('*')" /></td>
                </tr>
                <tr>
                    <td><input class="button" type="button" value="7" onclick="insert(7)" /></td>
                    <td><input class="button" type="button" value="8" onclick="insert(8)" /></td>
                    <td><input class="button" type="button" value="9" onclick="insert(9)" /></td>
                    <td><input class="button" type="button" value="-" onclick="insert('-')" /></td>
                </tr>
                <tr>
                    <td><input class="button" type="button" value="4" onclick="insert(4)" /></td>
                    <td><input class="button" type="button" value="5" onclick="insert(5)" /></td>
                    <td><input class="button" type="button" value="6" onclick="insert(6)" /></td>
                    <td><input class="button" type="button" value="+" onclick="insert('+')" /></td>
                </tr>
                <tr>
                    <td><input class="button" type="button" value="1" onclick="insert(1)" /></td>
                    <td><input class="button" type="button" value="2" onclick="insert(2)"/></td>
                    <td><input class="button" type="button" value="3" onclick="insert(3)" /></td>
                    <td rowspan=5><input class="buttonEqual" style="height:106" type="button" value="=" onclick="equal()" /></td>
                </tr>
                <tr>
                    <td colspan=2><input class="buttonZero" style="width:106" type="button" value="0" onclick="insert(0)" /></td>
                    <td><input class="button" type="button" value="." onclick="insert('.')") /></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-md-6">
        <div class="ant">
            <h3>Anotar Resultados</h3>
            <form method="POST">
                <textarea type="text" name="ant" class="form-control"></textarea><br/>
                <input type="submit" value="Salvar Resultados" class="btn btn-primary" />
            </form>
        </div>
    </div>
</div>
<a target="_blank" class="btn btn-success" style="margin-top:3rem;" href="<?php echo BASE_URL; ?>calc/result_pdf">Gerar PDF</a>