var menu = document.querySelectorAll('#dropdownlist > li');
for( var i=0; i< menu.length; i++)
{
	menu[i].addEventListener("click", function()
	{
		var menuList = document.querySelectorAll('#dropdownlist > li > ul');
		for (var j=0;j<menuList.length;j++){
			menuList[j].style.display = "none";
		}
		this.children[1].style.display = "block";
	});
}