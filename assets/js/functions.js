
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * Xoops XoopsSecure module for xoops
 *
 * @copyright 2021 XOOPS Project (https://xoops.org)
 * @license   GPL 2.0 or later
 * @package   xoopsSecure
 * @since     1.0
 * @min_xoops 2.5.11
 * @author    Culex - Email:culex@culex.dk - Website:https://www.culex.dk
 */
$(document).ready(
    function () {
        $("button, input:button, input:submit, input:file, input:reset").css("color","inherit").button();
        $(".check").css("color","#fff").button();
        $(".radio").css("color","#fff").buttonset();
        $(".toolbar").css("color","#000").buttonset();
    }
);

// <![CDATA[
/*------------------------------------------------------------------------------
Excerpts from the jsUtilities Library
Version:        2.1
Homepage:       https://www.easy-designs.net/code/jsUtilities/
License:        Creative Commons Attribution-ShareAlike 2.0 License
                https://creativecommons.org/licenses/by-sa/2.0/
Note:           If you change or improve on this script, please let us know.
------------------------------------------------------------------------------*/
if (Array.prototype.push === null) {
    Array.prototype.push = function (item) {
        this[this.length] = item;
        return this.length;
    }
}
// ---------------------------------------------------------------------
//                  function.apply (if unsupported)
//           Courtesy of Aaron Boodman - https://youngpup.net
// ---------------------------------------------------------------------
if (!Function.prototype.apply) {
    Function.prototype.apply = function (oScope, args) {
        var sarg = [];
        var rtrn, call;
        if (!oScope) {
            oScope = window;
        }
        if (!args) {
            args = [];
        }
        for (var i = 0; i < args.length; i++) {
            sarg[i] = "args[" + i + "]";
        }
        call = "oScope.__applyTemp__(" + sarg.join(",") + ");";
        oScope.__applyTemp__ = this;
        rtrn = eval(call);
        oScope.__applyTemp__ = null;
        return rtrn;
    }
}
function inArray(needle)
{
    for (var i = 0; i < this.length; i++) {
        if (this[i] === needle) {
            return i;
        }
    }
    return false;
}
function addClass(theClass)
{
    if (this.className != '') {
        this.className += ' ' + theClass;
    } else {
        this.className = theClass;
    }
}
function lastChildContainingText()
{
    var testChild = this.lastChild;
    var contentCntnr = ['p','li','dd'];
    while (testChild.nodeType != 1) {
        testChild = testChild.previousSibling;
    }
    var tag = testChild.tagName.toLowerCase();
    var tagInArr = inArray.apply(contentCntnr, [tag]);
    if (!tagInArr && tagInArr !== 0) {
        testChild = lastChildContainingText.apply(testChild);
    }
    return testChild;
}
// ]]>