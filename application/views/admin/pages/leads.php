<!-- Content Header (Page header) -->

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Leads</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/home'); ?>">Home</a></li>
                    <li class="breadcrumb-item active">Leads</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <table id="tabelalead" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Telefone</th>
                                    <th>Email</th>
                                    <th>Tipo</th>
                                    <th>Especialidade</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($leads as $lead) { ?>
                                    <tr>
                                        <td><?= $lead->id; ?></td>
                                        <td><?= $lead->nome; ?></td>
                                        <td><?= $lead->telefone; ?></td>
                                        <td><?= $lead->email; ?></td>
                                        <td><?= $lead->tipo; ?></td>
                                        <td><?= $lead->especialidade; ?></td>
                                        <td><?= $lead->data_cadastro; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Telefone</th>
                                    <th>Email</th>
                                    <th>Tipo</th>
                                    <th>Especialidade</th>
                                    <th>Data</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div><!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>