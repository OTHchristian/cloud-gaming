document.getElementById('toggleButton').onclick = function() {
    var sideMenu = document.getElementById('sideMenu');
    if (sideMenu.style.width == '250px') {
        sideMenu.style.width = '0';
    } else {
        sideMenu.style.width = '250px';
    }
}    

const setting = document.getElementById('setting');
setting.addEventListener('click',function(){
    window.location.href = 'setting.php';
});

const game = document.getElementById('game')
game.addEventListener('click',function(){
    window.location.href = 'accueil.php'
})
