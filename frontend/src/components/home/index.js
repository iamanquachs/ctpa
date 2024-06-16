export function nhomsp_filter(e) {
  var nhomsp = document.querySelectorAll(".items_nhomsp li a");
  for (var i = 0; i < nhomsp.length; i++) {
    nhomsp[i].classList.remove("active_nhomsp");
  }
  e.target.classList.add("active_nhomsp");
}
export function hangsx_filter(e) {
  var hangsx = document.querySelectorAll(".items_nsx li");
  for (var i = 0; i < hangsx.length; i++) {
    hangsx[i].classList.remove("active_filter");
  }
  e.target.classList.add("active_filter");
}
export function tieuchuan_filter(e) {
  var tieuchuan = document.querySelectorAll(".items_tieuchuan li");
  for (var i = 0; i < tieuchuan.length; i++) {
    tieuchuan[i].classList.remove("active_filter");
  }
  e.target.classList.add("active_filter");
}
export function nuocsx_filter(e) {
  var nuocsx = document.querySelectorAll(".items_nuocsx li");
  for (var i = 0; i < nuocsx.length; i++) {
    nuocsx[i].classList.remove("active_filter");
  }
  e.target.classList.add("active_filter");
}
