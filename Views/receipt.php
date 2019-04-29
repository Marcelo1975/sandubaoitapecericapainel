<h1 style="text-align:center;margin-top:2rem;">Comprovantes e/ou Recibos</h1>
<div class="row">
    <div class="col-sm-6" style="text-align:center;margin-top:2rem;">
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" name="receiptName" class="form-control" placeholder="Nome para o comprovante" />
            </div>
            <div class="form-group">
                <input type="file" name="receiptImg" class="form-control" />
            </div>
            <button type="submit" class="btn btn-success">Enviar Comprovante</button>
        </form>
        <hr/>
        <button class="btn btn-primary" onClick="openCont('cont-1')">Visualizar Comprovantes</button>
    </div>
    <div class="col-sm-6" style="text-align:center;margin-top:2rem;">
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" name="recibName" class="form-control" placeholder="Nome para o recibo" />
            </div>
            <div class="form-group">
                <input type="file" name="recibImg" class="form-control" />
            </div>
            <button type="submit" class="btn btn-success">Enviar Recibo</button>
        </form>
        <hr/>
        <button class="btn btn-primary" onClick="openRecibs('cont-2')">Visualizar Recibos</button>
    </div>
</div>
<hr/>
<div id="cont-1">
    <?php foreach($receipts as $item): ?>
    <div class="cont-img1">
        <strong><?php echo $item['name']; ?></strong>
        <img src="<?php echo BASE_URL; ?>assets/images/receipts/<?php echo $item['url']; ?>" alt="Receipt" width="160" height="150" />
    </div>
    <?php endforeach; ?>
</div>

<div id="cont-2">    
    <?php foreach($recibs as $item): ?>
    <div class="cont-img2">
        <strong><?php echo $item['name']; ?></strong>
        <img src="<?php echo BASE_URL; ?>assets/images/recibs/<?php echo $item['url']; ?>" alt="Recibs" width="160" height="150" />
    </div>
    <?php endforeach; ?>
</div>
