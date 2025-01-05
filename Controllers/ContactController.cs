using Microsoft.AspNetCore.Mvc;

namespace RentACloth.Controllers
{
    public class ContactController : Controller
    {
        [Route("contact-us", Name = "ContactPage")]
        public IActionResult Index()
        {
            return View();
        }
    }
}
