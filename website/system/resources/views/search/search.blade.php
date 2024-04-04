<form id="search_this" action="{{route('search.search',[\App::getLocale()])}}" style="display:inline; " method="get">

    <input id="search-box-255" name="search_word" size="25" type="text" autocomplete="off" style="margin: 12px; color:black;  border: 1px solid grey;
  border-radius: 5px;
  height: 25px;
  width: 50%;
  padding: 2px 23px 2px 30px;
  outline: 0;
  background-color: #f5f5f5;" placeholder="Search..." required/>
    <input id="search-btn-255" value="Search" style="color: black;  border: 1px solid grey;
  border-radius: 5px;
  height: 25px;
  width: 20%;
  padding: 2px 3px 2px 0px;
  outline: 0;
  background-color: #f5f5f5;" type="submit"/>
</form>
