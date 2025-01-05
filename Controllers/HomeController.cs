using Microsoft.AspNetCore.Mvc;
using RentACloth.Models;
using System.Diagnostics;

namespace RentACloth.Controllers
{
    public class HomeController : Controller
    {
        private readonly ILogger<HomeController> _logger;

        public HomeController(ILogger<HomeController> logger)
        {
            _logger = logger;
        }

        [Route("/", Name = "HomePage") /*, Name = "HomePage"*/]
        public IActionResult Index()
        {
            return View();
        }

    }
}
