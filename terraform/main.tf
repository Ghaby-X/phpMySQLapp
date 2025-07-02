module "owby_vpc" {
  source = "./modules/networking"

  project_name   = var.project_name
  default_tags   = var.default_tags
}