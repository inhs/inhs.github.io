function nextSlide(){w=$(".JScomBlockItem").width(),index=$("._curSlide").index(),indexLast=$(".JScomBlockItem").last().index(),index<indexLast?($(".JScomBlockItem").eq(index).removeClass("_curSlide"),$(".JScomBlockItem").eq(index+1).addClass("_curSlide"),$(".JSphotosBlockItem").eq(index).removeClass("_curPhoto"),$(".JSphotosBlockItem").eq(index+1).addClass("_curPhoto"),index++,w*=index,$(".commentsBlock").css({transform:"translate(-"+w+"px,0)"})):($(".JScomBlockItem").eq(index).removeClass("_curSlide"),$(".JScomBlockItem").first().addClass("_curSlide"),$(".JSphotosBlockItem").eq(index).removeClass("_curPhoto"),$(".JSphotosBlockItem").first().addClass("_curPhoto"),$(".commentsBlock").css({transform:"translate(0,0)"}),w=$(".JScomBlockItem").width())}function prevSlide(){w=$(".JScomBlockItem").width(),index=$("._curSlide").index(),indexFirst=$(".JScomBlockItem").first().index(),index>indexFirst?($(".JScomBlockItem").eq(index).removeClass("_curSlide"),$(".JScomBlockItem").eq(index-1).addClass("_curSlide"),$(".JSphotosBlockItem").eq(index).removeClass("_curPhoto"),$(".JSphotosBlockItem").eq(index-1).addClass("_curPhoto"),index--,w*=index):($(".JScomBlockItem").eq(index).removeClass("_curSlide"),$(".JScomBlockItem").last().addClass("_curSlide"),$(".JSphotosBlockItem").eq(index).removeClass("_curPhoto"),$(".JSphotosBlockItem").last().addClass("_curPhoto"),w*=$(".JScomBlockItem").last().index()),$(".commentsBlock").css({transform:"translate(-"+w+"px,0)"})}$(".JSopenSideBar, .JScloseBtn").on("click",function(){$(".sideBar").toggleClass("_open")}),$(window).on("scroll",function(e){$(window).scroll(function(){var e=$(this).scrollTop();20<e?$(".mainNav").addClass("_scrolled"):$(".mainNav").removeClass("_scrolled"),$(".JSfeaturesAnim").each(function(){e>=$(this).offset().top-800&&($("._JSleftAnim").addClass("fadeUp"),setTimeout(function(){$("._JSrightAnim").addClass("fadeUp")},200))}),$(".JSprotectAnim").each(function(){e>=$(this).offset().top-900&&$(".JSiphoneBlockAnim").addClass("fadeUp")}),$(".JSlocationAnim").each(function(){e>=$(this).offset().top-900&&$(".JSmapBlockAnim").addClass("fadeUp")})})}),setTimeout(function(){$(".JSheaderTitleAnim").addClass("fadeUp")}),setTimeout(function(){$(".JSheaderTextAnim").addClass("fadeUp")},100),setTimeout(function(){$(".JSheaderBtnAnim").addClass("fadeUp")},300),setTimeout(function(){$(".JSheaderPhoneAnim").addClass("fadeUp")},300),$(".JSphotosBlockItem").on("click",function(){w=$(".JScomBlockItem").width(),index=$("._curPhoto").index(),indexThis=$(this).index(),$(this).hasClass("_curPhoto")||($(".JSphotosBlockItem").eq(indexThis).addClass("_curPhoto"),$(".JSphotosBlockItem").eq(index).removeClass("_curPhoto"),$(".JScomBlockItem").eq(indexThis).addClass("_curSlide"),$(".JScomBlockItem").eq(index).removeClass("_curSlide"),w*=indexThis,$(".commentsBlock").css({transform:"translate(-"+w+"px,0)"}))}),$("._next").on("click",function(){nextSlide()}),$("._prev").on("click",function(){prevSlide()}),setInterval(function(){},7e3),$(".JSswitchBlock").on("click",function(){$(".rightBlock").addClass("JSperspective"),$(".JSswitchBlock").toggleClass("_active"),$(".card").toggleClass("JSactive"),setTimeout(function(){$(".rightBlock").removeClass("JSperspective")},1e3)});