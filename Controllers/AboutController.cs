using Microsoft.AspNetCore.Mvc;

namespace RentACloth.Controllers
{
    public class AboutController : Controller
    {
        [Route("about-us", Name = "AboutPage")]

        public IActionResult Index()
        {
            return View();
        }
    }
}
