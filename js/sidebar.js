$(document).ready(function () {
    console.log(role_id)
    $.ajax({
			url: API + "access/" + role_id,
			type: "GET",
			dataType: "JSON",
			success: function (menus) {
				let menu = menus.data;
				menu.forEach((element) => {
					$("#sidebarnav").append(
						`<li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link" href="${base_url}${element.link_menu}" aria-expanded="false"><i class="${element.icons}" id="icon_sidebar"></i><span class="hide-menu">${element.nama_menu}</span></a></li>`
					);
				});
			},
		});
})

