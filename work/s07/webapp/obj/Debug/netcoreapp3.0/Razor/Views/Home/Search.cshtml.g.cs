#pragma checksum "/Users/macbookpro/Desktop/websoft/work/s07/webapp/Views/Home/Search.cshtml" "{ff1816ec-aa5e-4d10-87f7-6f4963833460}" "478cf550455822d0e6719cbe291cad3bdff9a189"
// <auto-generated/>
#pragma warning disable 1591
[assembly: global::Microsoft.AspNetCore.Razor.Hosting.RazorCompiledItemAttribute(typeof(AspNetCore.Views_Home_Search), @"mvc.1.0.view", @"/Views/Home/Search.cshtml")]
namespace AspNetCore
{
    #line hidden
    using System;
    using System.Collections.Generic;
    using System.Linq;
    using System.Threading.Tasks;
    using Microsoft.AspNetCore.Mvc;
    using Microsoft.AspNetCore.Mvc.Rendering;
    using Microsoft.AspNetCore.Mvc.ViewFeatures;
#nullable restore
#line 1 "/Users/macbookpro/Desktop/websoft/work/s07/webapp/Views/_ViewImports.cshtml"
using webapp;

#line default
#line hidden
#nullable disable
#nullable restore
#line 2 "/Users/macbookpro/Desktop/websoft/work/s07/webapp/Views/_ViewImports.cshtml"
using webapp.Models;

#line default
#line hidden
#nullable disable
    [global::Microsoft.AspNetCore.Razor.Hosting.RazorSourceChecksumAttribute(@"SHA1", @"478cf550455822d0e6719cbe291cad3bdff9a189", @"/Views/Home/Search.cshtml")]
    [global::Microsoft.AspNetCore.Razor.Hosting.RazorSourceChecksumAttribute(@"SHA1", @"3103d864f23ac3d744630616c627f5c59e8b550e", @"/Views/_ViewImports.cshtml")]
    public class Views_Home_Search : global::Microsoft.AspNetCore.Mvc.Razor.RazorPage<IEnumerable<webapp.Models.Account>>
    {
        #pragma warning disable 1998
        public async override global::System.Threading.Tasks.Task ExecuteAsync()
        {
            WriteLiteral("\n");
#nullable restore
#line 3 "/Users/macbookpro/Desktop/websoft/work/s07/webapp/Views/Home/Search.cshtml"
  
    ViewData["Title"] = "Search";

#line default
#line hidden
#nullable disable
            WriteLiteral("\n<h1> Search Customer</h1>\n\n<p>\n  \n   <input Class=\"Search\" id=\"myInput\" Search\" type=\"text\" onkeyup=\"myFunction()\"placeholder=\"Search by AcctNumber\">\n</p>\n<table id=\"myTable\" class=\"table\">\n    <thead>\n        <tr>\n            <th>\n                ");
#nullable restore
#line 17 "/Users/macbookpro/Desktop/websoft/work/s07/webapp/Views/Home/Search.cshtml"
           Write(Html.DisplayNameFor(model => model.Number));

#line default
#line hidden
#nullable disable
            WriteLiteral("\n            </th>\n            <th>\n                ");
#nullable restore
#line 20 "/Users/macbookpro/Desktop/websoft/work/s07/webapp/Views/Home/Search.cshtml"
           Write(Html.DisplayNameFor(model => model.Balance));

#line default
#line hidden
#nullable disable
            WriteLiteral("\n            </th>\n            <th>\n                ");
#nullable restore
#line 23 "/Users/macbookpro/Desktop/websoft/work/s07/webapp/Views/Home/Search.cshtml"
           Write(Html.DisplayNameFor(model => model.Label));

#line default
#line hidden
#nullable disable
            WriteLiteral("\n            </th>\n            <th>\n                ");
#nullable restore
#line 26 "/Users/macbookpro/Desktop/websoft/work/s07/webapp/Views/Home/Search.cshtml"
           Write(Html.DisplayNameFor(model => model.Owner));

#line default
#line hidden
#nullable disable
            WriteLiteral("\n            </th>\n            <th></th>\n        </tr>\n    </thead>\n    <tbody>\n");
#nullable restore
#line 32 "/Users/macbookpro/Desktop/websoft/work/s07/webapp/Views/Home/Search.cshtml"
         foreach (var item in Model)
        {

#line default
#line hidden
#nullable disable
            WriteLiteral("            <tr>\n                <td>\n                    ");
#nullable restore
#line 36 "/Users/macbookpro/Desktop/websoft/work/s07/webapp/Views/Home/Search.cshtml"
               Write(Html.DisplayFor(modelItem => item.Number));

#line default
#line hidden
#nullable disable
            WriteLiteral("\n                </td>\n                <td>\n                    ");
#nullable restore
#line 39 "/Users/macbookpro/Desktop/websoft/work/s07/webapp/Views/Home/Search.cshtml"
               Write(Html.DisplayFor(modelItem => item.Balance));

#line default
#line hidden
#nullable disable
            WriteLiteral("\n                </td>\n                <td>\n                    ");
#nullable restore
#line 42 "/Users/macbookpro/Desktop/websoft/work/s07/webapp/Views/Home/Search.cshtml"
               Write(Html.DisplayFor(modelItem => item.Label));

#line default
#line hidden
#nullable disable
            WriteLiteral("\n                </td>\n                <td>\n                    ");
#nullable restore
#line 45 "/Users/macbookpro/Desktop/websoft/work/s07/webapp/Views/Home/Search.cshtml"
               Write(Html.DisplayFor(modelItem => item.Owner));

#line default
#line hidden
#nullable disable
            WriteLiteral("\n                </td>\n             \n            </tr>\n");
#nullable restore
#line 49 "/Users/macbookpro/Desktop/websoft/work/s07/webapp/Views/Home/Search.cshtml"
        }

#line default
#line hidden
#nullable disable
            WriteLiteral(@"
        
    </tbody>



    
</table>

<style>
    .Search {
        float: right;
        padding: 6px;
        border: none;
        margin-top: 8px;
        margin-right: 16px;
        font-size: 17px;
        padding-right:900px;
    }
</style>


<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById(""myInput"");
  filter = input.value.toUpperCase();
  table = document.getElementById(""myTable"");
  tr = table.getElementsByTagName(""tr"");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName(""td"")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = """";
      } else {
        tr[i].style.display = ""none"";
      }
    }
  }
}
</script>");
        }
        #pragma warning restore 1998
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.ViewFeatures.IModelExpressionProvider ModelExpressionProvider { get; private set; }
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.IUrlHelper Url { get; private set; }
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.IViewComponentHelper Component { get; private set; }
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.Rendering.IJsonHelper Json { get; private set; }
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.Rendering.IHtmlHelper<IEnumerable<webapp.Models.Account>> Html { get; private set; }
    }
}
#pragma warning restore 1591