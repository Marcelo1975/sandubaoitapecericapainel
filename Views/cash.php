<div class="container-fluid cash">
	<div class="row">
		<div class="col-sm-6 instruc">
			<h3>Fluxo de caixa</h3>
			<form method="POST" action="<?php echo BASE_URL; ?>cash/index_cash">
				<div class="form-group">
					<label for="agency">Agência:</label>
					<input type="text" name="agency" id="agency" class="form-control" />
				</div>

				<div class="form-group">
					<label for="acount">Conta:</label>
					<input type="text" name="acount" id="acount" class="form-control" />
				</div>
				
				<div class="form-group">
					<label for="type">Tipo de Transação:</label>
					<select name="type" id="type" class="form-control">
						<option value="0">Depósito</option>
						<option value="1">Retirada</option>
					</select>
				</div>

				<div class="form-group">
					<label for="value">Valor</label>
					<input type="text" name="value" id="value" class="form-control" pattern="[0-9.,]{1,}" />
				</div>

				<button type="submit" class="btn btn-primary">Finalizar Transação</button>
			</form>
		</div>
		<div class="col-sm-6 instruc">
			<h3>Instruções de uso</h3>
			<p>Olá, seja bem vindo ao seu simulador de transações bancárias, aqui você pode acompanhar suas movimentações bancárias em tempo real simulando <strong>DEPÓSITOS</strong> e <strong>RETIRADAS</strong> tudo como se fosse em seu banco na vida real. Então como funciona, primeiro você usa os seus dados ficticios, para basta copiar os mesmos na seção <strong>Dados ficticios</strong>, onde estará os dados numéricos referentes a sua <strong>AGÊNCIA</strong> e <strong>CONTA</strong>, após digitar sua agência e conta, você deve escolher qual <strong>TIPO DE TRANSAÇÃO</strong> e por fim, você deve digitar o valor a ser depósitado ou retirado de sua conta, agora basta visualizar os detalhes da sua transação na seção <strong>DETALHES DA TRANSAÇÃO</strong>. O ideal seria você realizar as transações aqui em seu simulador e dopois realizar-las em seu caixa eletrônico na sua agência real, assim você terar maior controle de suas movimentações bancárias.<br/>Para ver os detalhes das operações: <span style="color: #0000FF;text-decoration: underline;font-weight: bold;">"INICIE UMA SESSÃO"</span></p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 instruc">
			<h3>Dados ficticios</h3>
			<table class="table">
				<tbody>
					<tr>
						<th scope="row">Titular</th>
						<td><?php echo $user->getName(); ?></td>
					</tr>
					<tr>
						<th scope="row">Agência</th>
						<td><?php echo $agency->getNameAgency(); ?></td>
					</tr>
					<tr>
						<th scope="row">Conta</th>
						<td><?php echo $acount->getNameAcount(); ?></td>
					</tr>
					<tr>
						<th scope="row">Saldo</th>
						<td><?php echo "R$ ".number_format($getbalance->getBalanceFinaly(), 2, ',', '.'); ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-sm-6 instruc">
			<h3>Detalhes da transação</h3>
			<table class="table" border="1">
				<tr>
					<th scope="col">Data</th>
					<th scope="col">Valor</th>
				</tr>
				<?php if(isset($_SESSION['bank']) && !empty($_SESSION['bank'])): ?>
				<?php foreach($dataTable as $item): ?>
					<tr>
						<td><?php echo date('d/m/Y, H:i', strtotime($item['data_operation']));?></td>
						<td>
							<?php if($item['type'] == '0'): ?>
							<span class="green">R$ <?php echo $item['value']; ?></span>
							<?php else: ?>
							<span class="red">- R$<?php echo $item['value']; ?></span>
							<?php endif; ?>
						</td>
					</tr>
				<?php endforeach; ?>
				<?php else: ?>
					<tr>
						<td></td>
						<td></td>
					</tr>
				<?php endif; ?>
			</table>
		</div>
	</div>
</div>