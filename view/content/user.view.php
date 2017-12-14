    <div class="row">
	<div class="col-md-offset-2 col-md-8">
		<div class="panel panel-default">
			<div class="panel-body">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<td>#</td>
							<td>Name</td>
							<td>Job</td>
						</tr>
					</thead>
					<tbody>
						<?php 
						if( isset($users) ): ?>
							<?php foreach ($users as $key => $user):?>
									<tr>
										<td><?= $key+1 ?></td>
										<td><?= $user->name ?></td>
										<td><?= $user->job ?></td>
									</tr>
							<?php endforeach ?>
						<?php endif ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>