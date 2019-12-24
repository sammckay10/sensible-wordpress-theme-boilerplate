import Lazy from "blazy";

// Initiate a new bLazy instance for <img/>,
// CSS `background-image` and <iframe/> lazy loading.
// Documentation: http://dinbror.dk/blog/blazy
new Lazy({
  selector: ".lazy"
});
