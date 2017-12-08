<style type="text/css">
    table  i{
        margin-right: 6px;
        margin-left: 6px;
    }
</style>

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-head">
            <div class="page-title">
                <h1>Tambah Konten Otomotif
                </h1>
            </div>
        </div>
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="index.html">Konten Web</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">Otomotif</span>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">Tambah</span>
            </li>
        </ul>
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-stat2">
                    <form class="form-horizontal" role="form" action="<?=base_url()?>admin/otomotif/proses_tambah" method="post" enctype="multipart/form-data">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-2 control-label">Nama</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="nama" id="nama"">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Kode Link</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="kode_link1" placeholder="Generate Otomatis" disabled="">
                                    <input type="hidden" id="kode_link2" name="kode_link">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Gambar 1</label>
                                <div class="col-md-9">
                                    <img id="show_img1" src="" alt="your image" width="50%" />
                                    <input type='file' id="img1" name="img1" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Gambar 2</label>
                                <div class="col-md-9">
                                    <img id="show_img2" src="" alt="your image" width="50%" />
                                    <input type='file' id="img2" name="img2" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Gambar 3</label>
                                <div class="col-md-9">
                                    <img id="show_img3" src="" alt="your image" width="50%" />
                                    <input type='file' id="img3" name="img3" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Gambar 4</label>
                                <div class="col-md-9">
                                    <img id="show_img4" src="" alt="your image" width="50%" />
                                    <input type='file' id="img4" name="img4" />
                                </div>
                            </div>

                            <br/>
                            <h3>PRODUK</h3>
                            <hr>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Produk (ID)</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="konten_id" name="konten_id"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Produk (EN)</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="konten_en" name="konten_en"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Performance</label>
                                <div class="col-md-9">
                                    <table class="table table-bordered" id="editableTable" style="width: 600px;">
                                        <thead>
                                            <tr>
                                                <th width="40%">Data</th>
                                                <th width="20%">Value</th>
                                                <th width="10%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-id="1">
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="6">
                                                    <button type="button" class="btn btn-default add-row" style="width:100%"><i class="fa fa-plus"></i>&nbsp;&nbsp; Tambah Data</button>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <br/>
                            <h3>FAQ</h3>
                            <hr>
                            <div class="form-group">
                                <label class="col-md-2 control-label">FAQ (ID)</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="faq_id" name="faq_id"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">FAQ (EN)</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="faq_en" name="faq_en"></textarea>
                                </div>
                            </div>
                            <br/>
                            <h3>WARRANTY</h3>
                            <hr>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Warranty (ID)</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="warranty_id" name="warranty_id"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Warranty (EN)</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="warranty_en" name="warranty_en"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"></label>
                                <div class="col-md-9">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    $(document).on('keyup', '#nama', function(){
        $('#kode_link1').val($(this).val().replace(/([.*+?^=!:${}()|\[\]\/\\\s+])/g, "-").toLowerCase());
        $('#kode_link2').val($(this).val().replace(/([.*+?^=!:${}()|\[\]\/\\\s+])/g, "-").toLowerCase());
    });

    $(function () {
        CKEDITOR.replace('konten_id');
        CKEDITOR.replace('konten_en');
        CKEDITOR.replace('faq_id');
        CKEDITOR.replace('faq_en');
        CKEDITOR.replace('warranty_id');
        CKEDITOR.replace('warranty_en');
    });

    function readURL(input,el) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $(el).attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#img1").change(function() {
      readURL(this, '#show_img1');
    });

    $("#img2").change(function() {
      readURL(this, '#show_img2');
    });

    $("#img3").change(function() {
      readURL(this, '#show_img3');
    });

    $("#img4").change(function() {
      readURL(this, '#show_img4');
    });


  (function($, window, document, undefined) {
  var pluginName = "editable",
    defaults = {
      keyboard: true,
      dblclick: true,
      button: true,
      buttonSelector: ".editlah",
      maintainWidth: true,
      dropdowns: {},
      edit: function() {},
      save: function() {},
      cancel: function() {}
    };

  function editable(element, options) {
    this.element = element;
    this.options = $.extend({}, defaults, options);

    this._defaults = defaults;
    this._name = pluginName;

    this.init();
  }

  editable.prototype = {
    init: function() {
      this.editing = false;

      if (this.options.dblclick) {
        $(this.element)
          .css("cursor", "pointer")
          .bind("dblclick", this.toggle.bind(this));
      }

      if (this.options.button) {
        $(this.options.buttonSelector, this.element).bind(
          "click",
          this.toggle.bind(this)
        );
      }
    },

    toggle: function(e) {
      e.preventDefault();

      this.editing = !this.editing;

      if (this.editing) {
        this.edit();
      } else {
        this.save();
      }
    },

    edit: function() {
      var instance = this,
        values = {};

      $("td[data-field]", this.element).each(function(index) {
        var input,
          field = $(this).data("field"),
          value = $(this).text(),
          width = $(this).width();

        values[field] = value;

        $(this).empty();

        if (instance.options.maintainWidth) {
          $(this).width(width);
        }

        input = $('<input type="text" />')
                .val(value)
                .data("old-value", value)
                .dblclick(instance._captureEvent);

        input.appendTo(this);

        if (instance.options.keyboard) {
          input.keydown(instance._captureKey.bind(instance));
        }
      });

      this.options.edit.bind(this.element)(values);
    },

    save: function() {
      var instance = this,
        values = {};

      $("td[data-field]", this.element).each(function(index) {
        var value = $(":input", this).val();
        var name_field;
        if(index==0){
          name_field = 'performa_data[]';
        }else if(index==1){
          name_field = 'performa_value[]';
        }

        values[$(this).data("field")] = value;

        $(this).empty().html(value+'<input type="hidden" name="'+name_field+'" value="'+value+'">');
      });

      this.options.save.bind(this.element)(values);
    },

    cancel: function() {
      var instance = this,
        values = {};

      $("td[data-field]", this.element).each(function() {
        var value = $(":input", this).data("old-value");

        values[$(this).data("field")] = value;

        $(this).empty().text(value);
      });

      this.options.cancel.bind(this.element)(values);
    },

    _captureEvent: function(e) {
      e.stopPropagation();
    },

    _captureKey: function(e) {
      if (e.which === 13) {
        this.editing = false;
        this.save();
      } else if (e.which === 27) {
        this.editing = false;
        this.cancel();
      }
    }
  };

  $.fn[pluginName] = function(options) {
    return this.each(function() {
      if (!$.data(this, "plugin_" + pluginName)) {
        $.data(this, "plugin_" + pluginName, new editable(this, options));
      }
    });
  };
})(jQuery, window, document);

editTable();

//custome editable starts
function editTable() {
  $(function() {
    var pickers = {};

    $("table tr").editable({

        edit: function(values) {
        $(".editlah i", this)
          .removeClass("fa-pencil")
          .addClass("fa-save")
          .attr("title", "Save");
      },
      save: function(values) {
        $(".editlah i", this)
          .removeClass("fa-save")
          .addClass("fa-pencil")
          .attr("title", "Edit");

        if (this in pickers) {
          pickers[this].destroy();
          delete pickers[this];
        }
      },
      cancel: function(values) {
        $(".editlah i", this)
          .removeClass("fa-save")
          .addClass("fa-pencil")
          .attr("title", "Edit");

        if (this in pickers) {
          pickers[this].destroy();
          delete pickers[this];
        }
      }
    });
  });
}

$(".add-row").click(function() {
  $("#editableTable")
    .find("tbody tr:last")
    .after(
      "<tr><td data-field='name'></td><td data-field='name'></td><td><a class='button button-small editlah' title='Edit'><i class='fa fa-pencil'></i></a> <a class='button button-small' title='Delete'><i class='fa fa-trash'></i></a></td></tr>"
    );
  editTable();
  setTimeout(function() {
    $("#editableTable").find("tbody tr:last td:last a[title='Edit']").click();
  }, 200);

  setTimeout(function() {
    $("#editableTable")
      .find("tbody tr:last td:first input[type='text']")
      .focus();
  }, 300);

  $("#editableTable")
    .find("a[title='Delete']")
    .unbind("click")
    .click(function(e) {
      $(this).closest("tr").remove();
    });
});

function myFunction() {}

$("#editableTable").find("a[title='Delete']").click(function(e) {
  var x;
  if (confirm("Are you sure you want to delete entire row?") == true) {
    $(this).closest("tr").remove();
  } else {
  }
});
</script>