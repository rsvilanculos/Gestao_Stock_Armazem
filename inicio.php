<div class="w3-container">
    <title>Pagina Principal</title>
</div>

<div class="w3-bar w3-black">
    <button class="w3-bar-item w3-button" onclick="openCity('London')"><h2>Frequentes</h2></button>
    <button class="w3-bar-item w3-button" onclick="openCity('Paris')"><h2>Categorias</h2></button>
</div>

<div id="Paris" class="w3-container city" style="display:none">
    <p></p> 
    <table>
        <tr><th>Produto</th><th>quantidade</th><th>preco</th><th>informacao</th><br></tr>
        <tr><td><img  class="" src="#"></td><td>QUANT</td><td>PRECO</td></td><td>infor</td></tr>
        <tr><td><img class="" src="#"></td><td>QUANT</td><td>PRECO</td></td><td>infor</td></tr>
        <tr><td><img class="" src="#"></td><td>QUANT</td><td>PRECO</td></td><td>infor</td></tr>
        <tr><td><img class="" src="#"></td><td>QUANT</td><td>PRECO</td></td><td>infor</td></tr>
        <tr><td><img class="" src="#"></td><td>QUANT</td><td>PRECO</td></td><td>infor</td></tr>
        <tr><td><img class="" src="#"></td><td>QUANT</td><td>PRECO</td></td><td>infor</td></tr>
    </table>
</div>

<div id="London" class="w3-container city">
    <table>
        <tr><th>Produto</th><th>quantidade</th><th>preco</th><th>informacao</th><br></tr>
        <tr><td><img class="" src="#"></td><td>QUANT</td><td>PRECO</td></td><td>infor</td></tr>
        <tr><td><img class="" src="#"></td><td>QUANT</td><td>PRECO</td></td><td>infor</td></tr>
        <tr><td><img class="" src="#"></td><td>QUANT</td><td>PRECO</td></td><td>infor</td></tr>
        <tr><td><img class="" src="#"></td><td>QUANT</td><td>PRECO</td></td><td>infor</td></tr>
        <tr><td><img class="" src="#"></td><td>QUANT</td><td>PRECO</td></td><td>infor</td></tr>

    </table>
</div>
<script>
    function openCity(cityName) {
        var i;
        var x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(cityName).style.display = "block";
    }
</script>