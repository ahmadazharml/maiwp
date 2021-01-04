        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
<!--          <h1 class="h3 mb-2 text-gray-800">Senarai Asnaf</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
-->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tukar Katalaluan</h6>
            </div>
<div class="card-body">

            <!-- form -->
		<form action="change_pwd/changePass" method="post">
        <input type="hidden" name="uid" value="<?= $data['users']['uid'];?>">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tbody>
                    <tr>
                      <td>Katalaluan Semasa</td>
                      <td>
                        <div class="form-group">
                          <input type="password" class="form-control" name="cpassword" id="cpassword" value="">
                        </div>
                    </td>
                    </tr> 
                    <tr>
                      <td>Katalaluan Baharu</td>
                      <td>
                        <div class="form-group">
                          <input type="password" class="form-control" name="newpassword" id="newpassword"  value="" required>
                        </div>
                      </td>
                    </tr>
                    </tbody>
                    
            </table>
                <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="showpassword" onclick="showPassword()">
          <label class="form-check-label" for="exampleCheck1"><strong>Lihat Katalaluan</strong></label>
          </div>

            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Kemaskini</button>
		</form>	

			<button type="button" class="btn btn-danger" onclick="window.history.go(-1); return false;">Batal</button>


            <!-- end form -->
            </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<script>

    function showPassword() {

      var x = document.getElementById("newpassword");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }

      var x2 = document.getElementById("cpassword");
      if (x2.type === "password") {
        x2.type = "text";
      } else {
        x2.type = "password";
      }
      
    }


</script>