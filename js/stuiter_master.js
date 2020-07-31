'use strict';
document.body.onload = () => {
  // log credits into the console when the page has finished loading
  console.log("This Wordpress theme was created by Joeri Geuzinge (https://www.joerigeuzinge.nl)");
  // sync height
  syncHeight();
}

/**
 * This function syncs the height of every element with a `sync-height` css class
*/
function syncHeight() {
  const elementsToSync = document.querySelectorAll(".sync-height");
  let max_height = 0;
  for (const el of elementsToSync) {
    // get the largest element height
    if (el.clientHeight > max_height) max_height = el.clientHeight;
  }
  for (const elNewHeight of elementsToSync) {
    // set the height to the largest height
    elNewHeight.style.height = `${max_height.toString()}px`;
  }
}
