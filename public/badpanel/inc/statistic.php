<table class="w-full bg-white shadow-lg text-left">
    <thead >
        <tr>
            <th class="py-2 px-3">#</th>
            <th>Filename</th>
            <th class="text-center">Type</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody id="content" >
       
    </tbody>
</table>

<div id="log" class=" mt-4" style="display: none;">
    <h3  class="text-white font-bold p-2 bg-yellow-500 rounded-full w-auto m-3">
    <span class="bg-red-500 rounded-full mr-2 p-1">Filename </span>
    <span id="log_title"></span></h3>
<textarea id="log_content" class="bg-green-900 text-white border-2 border-green-200 w-full h-80 p-5 "></textarea>
</div>

<script>
function  showLog(filename)
{
  
    $.ajax({
        type : 'GET',
        url : '../logs/'+filename,
        success:function(data)
        {
            $('#loader').show();
            setTimeout(function(){
            $('#loader').hide();
            $('#log').fadeIn();
            $('#log_title').html(filename.toUpperCase());
            $('#log_content').text(data);
            },200);
        }
    })
}
function createTable(no,filename,count)
{
    return ' <tr class="hover:bg-gray-100"> <td class="py-2 px-3 bg-indigo-200">'+no+'</td> <td class="bg-blue-200">'+filename+'</td> <td class="bg-purple-200 text-center">'+count+'</td>  <td class="flex flex-row items-center gap-3 justify-center "> <a href="#" onclick="showLog(\''+filename+'\');" class="text-green-400 inline-block"> <svg class="w-6 h-6" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg> </a> <a href="?rp=statistic&d='+filename+'" class="text-red-400 inline-block"> <svg class="w-6 h-6" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg> </a> </td> </tr>';
}
var datas=[];

fetch('?api=stats_api').then(response => response.json() ).then(data => {

    let text = "";
    data.forEach((item,index) => {
    document.getElementById('content').insertAdjacentHTML('beforeend',createTable(index+1,item , item.replace(".log","").toUpperCase() ));
    });

});
</script>

<?php
if(isset($_GET['d']))
{

    echo "<center>HELLO !</center>";
    @unlink(PUBLIC_PATH.'/logs/'.$_GET['d']);
    echo "<meta http-equiv='refresh' content='1;url=?rp=statistic'> ";
}

