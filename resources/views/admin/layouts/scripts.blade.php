  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  
  <!-- Bootstrap -->
  <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- DataTables  & Plugins -->
  <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('admin/plugins/jszip/jszip.min.js')}}"></script>
  <script src="{{ asset('admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
  <script src="{{ asset('admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
  <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
  <!-- AdminLTE -->
  <script src="{{ asset('admin/dist/js/adminlte.js')}}"></script>
  <!-- jquery-validation -->
  <!-- <script src="{{ asset('admin/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
  <script src="{{ asset('admin/plugins/jquery-validation/additional-methods.min.js')}}"></script> -->
  <!-- OPTIONAL SCRIPTS -->
  <!-- <script src="{{ asset('admin/plugins/chart.js/Chart.min.js')}}"></script> -->
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="{{ asset('admin/dist/js/demo.js')}}"></script> -->
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- <script src="{{ asset('admin/dist/js/pages/dashboard3.js')}}"></script> -->
  <script src="{{ asset('admin/js/custom.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <!-- InputMask -->
  <script src="{{asset('admin/plugins/moment/moment.min.js')}}"></script>
  <script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- bs-custom-file-input -->
  <script src="{{asset('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
  <script src="{{  asset('admin/ckeditor/ckeditor.js') }}"></script>
  <script>
      document.addEventListener("DOMContentLoaded", function() {
          feather.replace();
      });
  </script>
  <script>
      $(function() {
          CKEDITOR.replace('editor1', {
              enterMode: CKEDITOR.ENTER_BR,
              shiftEnterMode: CKEDITOR.ENTER_P,
          });
          $("#example1").DataTable({
              "responsive": true,
              "lengthChange": true,
              "autoWidth": false,
              // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
          $('#example2').DataTable({
              "paging": true,
              "lengthChange": true,
              "searching": true,
              "ordering": true,
              "info": true,
              "autoWidth": false,
              //"responsive": true,
              "responsive": {
                  details: {
                      display: $.fn.dataTable.Responsive.display.modal({
                          header: function(row) {
                              var data = row.data();
                              return 'Details for ' + data[0] + ' ' + data[1];
                          }
                      }),
                      renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                          tableClass: 'table'
                      })
                  }
              },
          });

          $("#date2").daterangepicker({
              locale: {
                  format: "YYYY-MM-DD",
              },
              showDropdowns: true,
              singleDatePicker: true,
              // timePicker: true,
              // timePicker24Hour: true,
              // timePickerIncrement: 05,
          });
          bsCustomFileInput.init();
      });
  </script>
  @section('script')
  @show