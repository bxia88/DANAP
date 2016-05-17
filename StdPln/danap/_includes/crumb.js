  function breadcrumbs(sClass, sDelimiter)
  {
    if(!sDelimiter) sDelimiter = '|';
    var sURL = (location.pathname.indexOf('?') != -1) ? location.pathname.substring(0, location.pathname.indexOf('?')) : location.pathname;
        sURL = (location.pathname.charAt(0) == '/') ? location.pathname.substring(1) : location.pathname;
    var aURL = sURL.split('/');
    if(aURL)
    {
      var sOutput = '<a href="/">Home</a> ' + sDelimiter + ' ';
      var sPath = '/';
      for(var i = 0; i < aURL.length; i++)
      {
        sPath += aURL[i] + '/';
        sOutput += '<a href="' + sPath + '"';
        if(sClass) sOutput += ' class="' + sClass +'"';
        sOutput += '>' + aURL[i] + '</a>';
        sOutput += ' ' + sDelimiter + ' ';
      }
      sOutput += 'here</div>';
      document.write(sOutput);
    }
  }