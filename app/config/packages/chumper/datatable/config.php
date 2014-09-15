<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Table specific configuration options.
    |--------------------------------------------------------------------------
    |
    */

    'table' => array(

        /*
        |--------------------------------------------------------------------------
        | Table class
        |--------------------------------------------------------------------------
        |
        | Class(es) added to the table
        | Supported: string
        |
        */

        'class' => 'table table-striped table-bordered bootstrap-datatable responsive',

        /*
        |--------------------------------------------------------------------------
        | Table ID
        |--------------------------------------------------------------------------
        |
        | ID given to the table. Used for connecting the table and the Datatables
        | jQuery plugin. If left empty a random ID will be generated.
        | Supported: string
        |
        */

        'id' => '',

        /*
        |--------------------------------------------------------------------------
        | DataTable options
        |--------------------------------------------------------------------------
        |
        | jQuery dataTable plugin options. The array will be json_encoded and
        | passed through to the plugin. See https://datatables.net/usage/options
        | for more information.
        | Supported: array
        |
        */

        'options' => array(
            "sDom"=>"<'row'<'col-md-6'l><'col-md-6 text-right'f>r>t<'row'<'col-md-12'i><'col-md-12 center-block'p>>",
            "sPaginationType"=>"bootstrap",
            "bProcessing" => false,
            "oLanguage"=>array(
              "sLengthMenu"=> "每页显示 _MENU_ 条记录",
              "sZeroRecords"=> "对不起，查询不到任何相关数据",
              "sInfo"=> "当前显示 _START_ 到 _END_ 条，共 _TOTAL_ 条记录",
              "sInfoEmpty"=> "当前显示 0 到 0 条，共 0 条记录",
              "sEmptyTable"=> "找不到相关数据",
              "sInfoFiltered"=> "数据表中共为 _MAX_ 条记录)",
              "sProcessing"=> "正在加载中...",
              "sSearch"=> "搜索",
              "sUrl"=> "", //多语言配置文件，可将oLanguage的设置放在一个txt文件中，例：Javascript/datatable/dtCH.txt
              "oPaginate"=> array(
                  "sFirst"=>   "第一页",
                  "sPrevious"=> " 上一页 ",
                  "sNext"=>     " 下一页 ",
                  "sLast"=>     " 最后一页 "
                )
            ), //多语言配



        ),

        /*
        |--------------------------------------------------------------------------
        | DataTable callbacks
        |--------------------------------------------------------------------------
        |
        | jQuery dataTable plugin callbacks. The array will be json_encoded and
        | passed through to the plugin. See https://datatables.net/usage/callbacks
        | for more information.
        | Supported: array
        |
        */

        'callbacks' => array(),

        /*
        |--------------------------------------------------------------------------
        | Skip javascript in table template
        |--------------------------------------------------------------------------
        |
        | Determines if the template should echo the javascript
        | Supported: boolean
        |
        */

        'noScript' => false,


        /*
        |--------------------------------------------------------------------------
        | Table view
        |--------------------------------------------------------------------------
        |
        | Template used to render the table
        | Supported: string
        |
        */

        'table_view' => 'datatable::template',


        /*
        |--------------------------------------------------------------------------
        | Script view
        |--------------------------------------------------------------------------
        |
        | Template used to render the javascript
        | Supported: string
        |
        */

        'script_view' => 'datatable::javascript',


    ),


    /*
    |--------------------------------------------------------------------------
    | Engine specific configuration options.
    |--------------------------------------------------------------------------
    |
    */

    'engine' => array(

        /*
        |--------------------------------------------------------------------------
        | Search for exact words
        |--------------------------------------------------------------------------
        |
        | If the search should be done with exact matching
        | Supported: boolean
        |
        */

        'exactWordSearch' => false,

    )


);
