<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add new products</title>

</head>


<body class="nav-md">

@extends("admin.index")
@section("admin.add-product")
                <!DOCTYPE html>

    <!-- Bootstrap core CSS -->

   
    
    <!-- editor -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <link href="../public/admin1/css/editor/external/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="../public/admin1/css/editor/index.css" rel="stylesheet">
    <!-- select2 -->
    <link href="../public/admin1/css/select/select2.min.css" rel="stylesheet">
    <!-- switchery -->
    <link rel="stylesheet" href="../public/admin1/css/switchery/switchery.min.css" />
    <script src="../public/admin1/js/jquery.min.js"></script>
    <script>
        $(function(){
            $("#image").change(function(e){
                var tmppath = URL.createObjectURL(event.target.files[0]);
                $(".put-image").attr("src",tmppath);
            });
            
        });
   
    </script>
    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

                <div class="">

                    <div class="page-title">
                        <div class="title_left">
                            <h3>Products > Add new product</h3>
                        </div>
                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group" style="display:none">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <span class="section">Product Info</span>
                                    <?php if(Session::has("success")) {
                                        if(Session::get("success")=="True")
                                        {
                                            echo '<div class="alert alert-success"><strong>Success!</strong> Insert product complete.
                                                    </div>';                                                    
                                        }
                                        else
                                        {
                                            if(Session::get("success")=="True")
                                            {
                                                echo '<div class="alert alert-danger">
                                                      <strong>Error!</strong> An error occurred while adding the product.
                                                    </div>';
                                            }
                                        }
                                        Session::forget("success");
                                    }?>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                     <form enctype="multipart/form-data" method="POST" class="form-horizontal form-label-left" novalidate>

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="0" name="name" placeholder="Name of product" required="required" type="text">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="note">Note <span class="required">*</span>
                                            </label>   
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea id="note" required="required" name="note" class="form-control col-md-7 col-xs-12"></textarea>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Price <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="number" id="price" name="price" required="required" data-validate-minmax="10000," class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="promotion-price">Promotion Price <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="number" id="promotion-price" name="promotion-price" required="required" data-validate-minmax="0," class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">URL <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="url" id="url" name="url" placeholder="http://www.website.com" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        
                                        <div class="item form-group">
                                            <label for="status" class="control-label col-md-3 col-sm-3 col-xs-12">Status *:</label>   
                                                <div style="padding-top:10px" class="col-md-6 col-sm-6 col-xs-12">                                     
                                                    Show:
                                                    <input type="radio" class="flat" name="status" id="genderM" value="show" checked="true" required /> Hide:
                                                    <input type="radio" class="flat" name="status" id="genderF" value="hide" />
                                                </div>
                                        </div>
                                        <div class="item form-group">
                                            <label for='tag' class="control-label col-md-3 col-sm-3 col-xs-12">Input Tags*</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="tags_1" name='tag' type="text" class="tags form-control" value="" />
                                                <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label for='category' class="control-label col-md-3 col-sm-3 col-xs-12">Select Category</label>
                                            <div  class="col-md-6 col-sm-6 col-xs-12">
                                                <select name='category' id='category' class="select-group select2_group form-control">
                                                    @for($i=0;$i< count($menu);$i++)
                                                        @for($j=0;$j< count($arryTreeMenu);$j++)
                                                        @if($menu[$i]->ID==$arryTreeMenu[$j])
                                                        {
                                                            <option value="{{$menu[$i]->ID}}">{{$menu[$i]->name}}</option>
                                                        }
                                                        @endif
                                                        @endfor
                                                    @endfor
                                                    
                                                   
                                                </select>
                                            </div>
                                            
                                            
                                        </div>
                                       <div class="item form-group">
                                            <label for='image' class="control-label col-md-3 col-sm-3 col-xs-12">Image of product*</label>                                            
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="file" id="image" name="image" placeholder="" class="image-file">
                                                <img height='100px' class='put-image' style='padding: 4px;background-color:#fff;border: 1px solid #ddd;border-radius: 4px;-webkit-transition:all .2s ease-in-out; -o-transition: all .2s ease-in-out;transition: all .2s ease-in-out;display: inline-block;max-width: 50%;height: auto;' src="">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="keyword">Key word <span class="required">*</span>
                                            </label>   
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea id="keyword" required="required" name="keyword" class="form-control col-md-7 col-xs-12"></textarea>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description <span class="required">*</span>
                                            </label>   
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea id="description" required="required" name="description" class="form-control col-md-7 col-xs-12"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="x_panel">
                                                    <div class="x_title">
                                                        <h2>Detail Product</h2>
                                                        <ul class="nav navbar-right panel_toolbox">
                                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                                <ul class="dropdown-menu" role="menu">
                                                                    <li><a href="#">Settings 1</a>
                                                                    </li>
                                                                    <li><a href="#">Settings 2</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                            </li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="x_content">


                                                        <div id="alerts"></div>
                                                        <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
                                                            <div class="btn-group">
                                                                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa icon-font"></i><b class="caret"></b></a>
                                                                <ul class="dropdown-menu">
                                                                </ul>
                                                            </div>
                                                            <div class="btn-group">
                                                                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a data-edit="fontSize 5"><p style="font-size:17px">Huge</p></a>
                                                                    </li>
                                                                    <li><a data-edit="fontSize 3"><p style="font-size:14px">Normal</p></a>
                                                                    </li>
                                                                    <li><a data-edit="fontSize 1"><p style="font-size:11px">Small</p></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="btn-group">
                                                                <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
                                                                <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
                                                                <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="icon-strikethrough"></i></a>
                                                                <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="icon-underline"></i></a>
                                                            </div>
                                                            <div class="btn-group">
                                                                <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="icon-list-ul"></i></a>
                                                                <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="icon-list-ol"></i></a>
                                                                <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="icon-indent-left"></i></a>
                                                                <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="icon-indent-right"></i></a>
                                                            </div>
                                                            <div class="btn-group">
                                                                <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a>
                                                                <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a>
                                                                <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a>
                                                                <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="icon-align-justify"></i></a>
                                                            </div>
                                                            <div class="btn-group">
                                                                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="icon-link"></i></a>
                                                                <div class="dropdown-menu input-append">
                                                                    <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                                                                    <button class="btn" type="button">Add</button>
                                                                </div>
                                                                <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="icon-cut"></i></a>

                                                            </div>

                                                            <div class="btn-group">
                                                                <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="icon-picture"></i></a>
                                                                <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                                                            </div>
                                                            <div class="btn-group">
                                                                <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="icon-undo"></i></a>
                                                                <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="icon-repeat"></i></a>
                                                            </div>
                                                        </div>

                                                        <div id="editor">
                                                            
                                                        </div>
                                                        <textarea name="detail" id="detail" value="lskf" style="display:none;"></textarea>
                                                        <br />
          
                                                    </div>
                                            </div>
                                        </div>

                                         <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                <button type="" id="cancel" class="btn btn-primary">Cancel</button>
                                                <input id="send" type="submit" class="btn btn-success" value='Submit' />
                                            </div>
                                        </div>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#birthday').daterangepicker({
                                singleDatePicker: true,
                                calender_style: "picker_4"
                            }, function (start, end, label) {
                                console.log(start.toISOString(), end.toISOString(), label);
                            });
                            $("#cancel").bind("click", function() {
                                  location.reload(true);
                                });
                        });
                    </script>


                   
                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->

          
        <!-- tags -->
        <script src="../public/admin1/js/tags/jquery.tagsinput.min.js"></script>
        <!-- switchery -->
        <script src="../public/admin1/js/switchery/switchery.min.js"></script>
        <!-- daterangepicker -->
        <script type="text/javascript" src="../public/admin1/js/moment.min2.js"></script>
        <script type="text/javascript" src="../public/admin1/js/datepicker/daterangepicker.js"></script>
        <!-- richtext editor -->
        <script src="../public/admin1/js/editor/bootstrap-wysiwyg.js"></script>
        <script src="../public/admin1/js/editor/external/jquery.hotkeys.js"></script>
        <script src="../public/admin1/js/editor/external/google-code-prettify/prettify.js"></script>
        <!-- select2 -->
        <script src="../public/admin1/js/select/select2.full.js"></script>
        <!-- form validation -->
        <script type="text/javascript" src="../public/admin1/js/parsley/parsley.min.js"></script>
        <!-- textarea resize -->
        <script src="../public/admin1/js/textarea/autosize.min.js"></script>
        <script>
            autosize($('.resizable_textarea'));
        </script>
        <!-- Autocomplete -->
        <script type="text/javascript" src="../public/admin1/js/autocomplete/countries.js"></script>
        <script src="../public/admin1/js/autocomplete/jquery.autocomplete.js"></script>
        
        <script type="text/javascript">
            $(function () {
                'use strict';
                var countriesArray = $.map(countries, function (value, key) {
                    return {
                        value: value,
                        data: key
                    };
                });
                // Initialize autocomplete with custom appendTo:
                $('#autocomplete-custom-append').autocomplete({
                    lookup: countriesArray,
                    appendTo: '#autocomplete-container'
                });
            });
        </script>


        <!-- select2 -->
        <script>
            $(document).ready(function () {
                $(".select2_single").select2({
                    placeholder: "Select a state",
                    allowClear: true
                });
                $(".select2_group").select2({});
                $(".select2_multiple").select2({
                    maximumSelectionLength: 4,
                    placeholder: "With Max Selection limit 4",
                    allowClear: true
                });
            });
        </script>
        <!-- /select2 -->
        <!-- input tags -->
        <script>
            function onAddTag(tag) {
                alert("Added a tag: " + tag);
            }

            function onRemoveTag(tag) {
                alert("Removed a tag: " + tag);
            }

            function onChangeTag(input, tag) {
                alert("Changed a tag: " + tag);
            }

            $(function () {
                $('#tags_1').tagsInput({
                    width: 'auto'
                });
            });
        </script>
        <!-- /input tags -->
        <!-- form validation -->
        <script type="text/javascript">
            $(document).ready(function () {
                $.listen('parsley:field:validate', function () {
                    validateFront();
                });
                $('#demo-form .btn').on('click', function () {
                    $('#demo-form').parsley().validate();
                    validateFront();
                });
                var validateFront = function () {
                    if (true === $('#demo-form').parsley().isValid()) {
                        $('.bs-callout-info').removeClass('hidden');
                        $('.bs-callout-warning').addClass('hidden');
                    } else {
                        $('.bs-callout-info').addClass('hidden');
                        $('.bs-callout-warning').removeClass('hidden');
                    }
                };
            });

            $(document).ready(function () {
                $.listen('parsley:field:validate', function () {
                    validateFront();
                });
                $('#demo-form2 .btn').on('click', function () {
                    $('#demo-form2').parsley().validate();
                    validateFront();
                });
                var validateFront = function () {
                    if (true === $('#demo-form2').parsley().isValid()) {
                        $('.bs-callout-info').removeClass('hidden');
                        $('.bs-callout-warning').addClass('hidden');
                    } else {
                        $('.bs-callout-info').addClass('hidden');
                        $('.bs-callout-warning').removeClass('hidden');
                    }
                };
            });
            try {
                hljs.initHighlightingOnLoad();
            } catch (err) {}
        </script>
        <!-- /form validation -->
        <!-- editor -->
        <script>
            $(document).ready(function () {
                $('#send').click(function () {
                    $('#detail').val($('#editor').html());
                });
            });

            $(function () {
                function initToolbarBootstrapBindings() {
                    var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                'Times New Roman', 'Verdana'],
                        fontTarget = $('[title=Font]').siblings('.dropdown-menu');
                    $.each(fonts, function (idx, fontName) {
                        fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
                    });
                    $('a[title]').tooltip({
                        container: 'body'
                    });
                    $('.dropdown-menu input').click(function () {
                            return false;
                        })
                        .change(function () {
                            $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                        })
                        .keydown('esc', function () {
                            this.value = '';
                            $(this).change();
                        });

                    $('[data-role=magic-overlay]').each(function () {
                        var overlay = $(this),
                            target = $(overlay.data('target'));
                        overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
                    });
                    if ("onwebkitspeechchange" in document.createElement("input")) {
                        var editorOffset = $('#editor').offset();
                        $('#voiceBtn').css('position', 'absolute').offset({
                            top: editorOffset.top,
                            left: editorOffset.left + $('#editor').innerWidth() - 35
                        });
                    } else {
                        $('#voiceBtn').hide();
                    }
                };

                function showErrorAlert(reason, detail) {
                    var msg = '';
                    if (reason === 'unsupported-file-type') {
                        msg = "Unsupported format " + detail;
                    } else {
                        console.log("error uploading file", reason, detail);
                    }
                    $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
                };
                initToolbarBootstrapBindings();
                $('#editor').wysiwyg({
                    fileUploadError: showErrorAlert
                });
                window.prettyPrint && prettyPrint();
            });
        </script>
        <!-- /editor -->
        <!-- form validation -->
    <script src="../public/admin1/js/validator/validator.js"></script>
         <script>
        // initialize the validator function
        validator.message['date'] = 'not a real date';

        // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
        $('form')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);

        $('.multi.required')
            .on('keyup blur', 'input', function () {
                validator.checkField.apply($(this).siblings().last()[0]);
            });

        // bind the validation to the form submit event
        //$('#send').click('submit');//.prop('disabled', true);

        $('form').submit(function (e) {
            e.preventDefault();
            var submit = true;
            // evaluate the form using generic validaing
            if (!validator.checkAll($(this))) {
                submit = false;
            }

            if (submit)
                this.submit();
            return false;
        });

        /* FOR DEMO ONLY */
        $('#vfields').change(function () {
            $('form').toggleClass('mode2');
        }).prop('checked', false);

        $('#alerts').change(function () {
            validator.defaults.alerts = (this.checked) ? false : true;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);
    </script>
   @endsection()
</body>

</html>