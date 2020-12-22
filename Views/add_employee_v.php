<!-- The Modal -->
<div class="fade modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title display-6">Thêm mới nhân viên</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="" method="POST" role="form" class="frm-add-employee">
        
          <div class="form-group">
            <label for="name" class="font-weight-bold">Tên nhân viên<span class="text-danger">(*)</span></label>
            <input type="text" class="form-control" id="name" placeholder="Họ tên*" required>
          </div>

          <div class="form-group">
            <label for="phone" class="font-weight-bold">Số điện thoại<span class="text-danger">(*)</span></label>
            <input type="text" class="form-control" id="phone" placeholder="Số điện thoại*" required>
          </div>
        
          <div class="form-group">
            <label for="email" class="font-weight-bold">Email<span class="text-danger">(*)</span></label>
            <input type="text" class="form-control" id="email" placeholder="Email*" required>
          </div>
        
          <div class="form-group">
            <label for="job" class="font-weight-bold">Công việc<span class="text-danger">(*)</span></label>
            <select id="job" class="form-control" required>
              <option value="">--Chọn công việc--</option>
              <option value="Lập trình viên">Lập trình viên</option>
              <option value="Marketing">Marketing</option>
              <option value="Tester">Tester</option>
              <option value="Trợ lý giám đốc">Trợ lý giám đốc</option>
              <option value="BA">BA</option>
            </select>
          </div>
          
           <!-- Modal footer -->
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary btn-add-employee">Thêm</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          </div>
          
        </form>
      </div>

     

    </div>
  </div>
</div>