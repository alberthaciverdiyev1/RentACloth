using Microsoft.AspNetCore.Mvc;

namespace RentACloth.Controllers
{
    public class ShopController : Controller
    {
        public IActionResult ShopList()
        {
            return View("Shop/ShopList");
        }
        public IActionResult RentList()
        {
            return View("Shop/RentList");
        }

    }
}
