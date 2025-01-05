using Microsoft.AspNetCore.Identity.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore;
using RentACloth.Models;

namespace RentACloth.Dal
{
    public class AppDbContext:IdentityDbContext<AppUser,UserRole,int>
    {
        public AppDbContext(DbContextOptions<AppDbContext>options):base(options)
        {
            
        }

        public DbSet<Category> Categories { get; set; }
        public DbSet<Clothes> Clothes { get; set; }
        public DbSet<Setting> Settings { get; set; }

    }
}
