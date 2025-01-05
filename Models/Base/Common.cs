using System.ComponentModel.DataAnnotations;

namespace RentACloth.Models.Base
{
    public class Common
    {
        [Key]
        public int Id { get; set; }
        [Required]
        public DateTime? UpdatedAt { get; set; }
        public DateTime? DeletedAt { get; set; }
        public DateTime CreatedAt { get; set; } = DateTime.Now;
    }
}
