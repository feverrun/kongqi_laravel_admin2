<script src="{{ ___('admin/default/sbadmin/vendor/jquery/jquery.min.js',$res_version??'') }}"></script>
<script src="{{ ___('admin/default/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js',$res_version??'') }}"></script>
<script src="{{ ___('admin/default/sbadmin/js/sb-admin-2.min.js',$res_version??'') }}"></script>
<script src="{{ ___('admin/layui/layui.js',$res_version??'') }}"></script>
<script>
    layui.config({
        v: "{{ env('APP_DEBUG')?time():config_cache_default('config.cache_version','1.0') }}",
        base: '{{ ___('admin/modules/') }}/' //你存放新模块的目录，注意，不是layui的模块目录
    });


</script>