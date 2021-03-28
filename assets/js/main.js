function navTrigger(event) {
  event.preventDefault();

  var _header = document.querySelector("header");
  var _headerHeight = _header.offsetHeight;
  var _eventTarget = event.target;
  var _id = _eventTarget.dataset.href.substring(_eventTarget.dataset.href.indexOf("#"));
  var _target = document.querySelector(_id);
  var _targetOffsetTop = _target.offsetTop;
  var top = _targetOffsetTop - _headerHeight;
  window.scrollTo(0, top);
}

function onlyKorean(event) {
  var pattern = /[a-z0-9]|[ \[\]{}()<>?|`~!@#$%^&*-_+=,.;:\"'\\]/g;
  event.target.value = event.target.value.replace(pattern, "");
}

function onlyPhone(event) {
  event.target.value = event.target.value
    .replace(/[^0-9]/g, "")
    .replace(/(^02|^0505|^1[0-9]{3}|^0[0-9]{2})([0-9]+)?([0-9]{4})$/, "$1-$2-$3")
    .replace("--", "-");
}

function onlyNumber(event) {
  var pattern = /[^0-9]/g;
  event.target.value = event.target.value.replace(pattern, "");
}
