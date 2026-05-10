<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\About;
use App\Models\Achievement;
use App\Models\Faq;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Service;
use App\Models\Slider;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\Feature;
use Illuminate\Support\Str;

class FlexBizSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Sliders (Hero)
        Slider::create([
            'title' => 'Excellence et Intégrité au service de votre croissance',
            'subtitle' => 'Expertise Fiduciaire & RH en RDC',
            'image' => 'flexbiz/assets/img/illustration/illustration-8.webp',
            'button1_text' => 'Découvrir ISVA-Innov',
            'button1_url' => '#about',
            'button2_text' => 'Présentation',
            'button2_url' => '#',
            'order' => 1,
        ]);

        // 2. About
        About::create([
            'title' => 'Concevoir des solutions financières avec un impact durable',
            'subtitle' => 'Notre Histoire',
            'content' => "ISVA-Innov est né de la volonté d'offrir aux entreprises congolaises une expertise de standard international, alliant rigueur technique et connaissance du marché local. Depuis notre création, nous accompagnons les PME et les grandes entreprises dans leur mise en conformité et l'optimisation de leurs ressources humaines.",
            'video_url' => '#',
            'features' => [
                'Éthique et Rigueur: Nous appliquons les standards d\'audit les plus élevés pour garantir votre sérénité.',
                'Approche Humaine: La sous-traitance chez ISVA-Innov, c\'est avant tout valoriser le capital humain de nos clients.',
            ],
        ]);

        // 3. Featured Services (using Feature model for the top grid)
        $features = [
            ['icon' => 'bi bi-search', 'title' => 'Audit & Assurance', 'description' => 'Audits financiers, opérationnels et de conformité pour garantir la fiabilité de vos informations.'],
            ['icon' => 'bi bi-calculator', 'title' => 'Expertise Comptable', 'description' => 'Tenue de comptabilité, établissement des états financiers et optimisation fiscale selon les normes OHADA.'],
            ['icon' => 'bi bi-people', 'title' => 'Sous-traitance RH', 'description' => 'Gestion externalisée de la paie, recrutement et mise à disposition de personnel qualifié.'],
            ['icon' => 'bi bi-briefcase', 'title' => 'Conseil Juridique & Fiscal', 'description' => 'Accompagnement dans le respect de la réglementation locale et optimisation de votre structure.'],
            ['icon' => 'bi bi-journal-check', 'title' => 'Gestion Sociale', 'description' => 'Administration du personnel, conformité aux lois du travail et gestion des relations avec les organismes sociaux.'],
            ['icon' => 'bi bi-graph-up-arrow', 'title' => 'Conseil en Gestion', 'description' => 'Analyse de performance, contrôle de gestion et assistance à la prise de décision stratégique.'],
        ];

        foreach ($features as $index => $f) {
            Feature::create([
                'icon' => $f['icon'],
                'title' => $f['title'],
                'description' => $f['description'],
                'order' => $index,
            ]);
        }

        // 4. Main Services (from the services section)
        $services = [
            [
                'title' => 'Audit & Commissariat',
                'description' => 'Audits financiers, opérationnels et de conformité.',
                'icon' => 'bi bi-laptop',
                'features' => ['Audit contractuel', 'Audit de conformité', 'Commissariat aux comptes', 'Due Diligence'],
                'price' => 'Sur Devis'
            ],
            [
                'title' => 'Expertise Comptable',
                'description' => 'Tenue de comptabilité et établissement des états financiers.',
                'icon' => 'bi bi-calculator',
                'features' => ['Tenue de comptabilité', 'États financiers OHADA', 'Déclarations fiscales', 'Conseil permanent'],
                'price' => 'A partir de $150/mois'
            ],
            [
                'title' => 'Sous-traitance RH',
                'description' => 'Gestion externalisée de la paie et mise à disposition de personnel.',
                'icon' => 'bi bi-people',
                'features' => ['Gestion de la paie', 'Recrutement', 'Externalisation RH', 'Gestion sociale'],
                'price' => 'Sur mesure'
            ],
        ];

        foreach ($services as $s) {
            Service::create([
                'title' => $s['title'],
                'slug' => Str::slug($s['title']),
                'description' => $s['description'],
                'icon' => $s['icon'],
                'features' => $s['features'],
                'price' => $s['price'],
                'order' => 0
            ]);
        }

        // 5. Projects (Portfolio - Secteurs d'Intervention)
        $projects = [
            ['title' => 'Secteur Minier', 'category' => 'mines', 'image' => 'flexbiz/assets/img/portfolio/portfolio-portrait-1.webp'],
            ['title' => 'Services & Commerce', 'category' => 'services', 'image' => 'flexbiz/assets/img/portfolio/portfolio-2.webp'],
            ['title' => 'ONG & Projets', 'category' => 'ong', 'image' => 'flexbiz/assets/img/portfolio/portfolio-portrait-2.webp'],
            ['title' => 'Industrie Locale', 'category' => 'industry', 'image' => 'flexbiz/assets/img/portfolio/portfolio-portrait-4.webp'],
        ];

        foreach ($projects as $p) {
            Project::create([
                'title' => $p['title'],
                'slug' => Str::slug($p['title']),
                'category' => $p['category'],
                'image' => $p['image'],
            ]);
        }

        // 6. Team Members
        $team = [
            ['name' => 'Jean-Claude Lumumba', 'role' => 'Associé Gérant - Expert Comptable', 'bio' => 'Plus de 20 ans d\'expérience en audit et conseil financier en RDC.', 'image' => 'flexbiz/assets/img/person/person-f-9.webp'],
            ['name' => 'Marie-Thérèse Kabila', 'role' => 'Responsable Audit', 'bio' => 'Spécialiste en commissariat aux comptes et régulation OHADA.', 'image' => 'flexbiz/assets/img/person/person-m-7.webp'],
            ['name' => 'Patrick Tshisekedi', 'role' => 'Directeur des Opérations RH', 'bio' => 'Expert en gestion de la main-d\'œuvre et législation sociale congolaise.', 'image' => 'flexbiz/assets/img/person/person-f-12.webp'],
            ['name' => 'Alain Mutombo', 'role' => 'Expert Fiscal', 'bio' => 'Accompagnement et optimisation fiscale pour entreprises et particuliers.', 'image' => 'flexbiz/assets/img/person/person-m-11.webp'],
        ];

        foreach ($team as $m) {
            TeamMember::create([
                'name'        => $m['name'],
                'position'    => $m['role'],
                'photo'       => $m['image'],
                'description' => $m['bio'],
            ]);
        }

        // 7. Testimonials
        $testimonials = [
            ['name' => 'Sarah Mwamba', 'role' => 'Gérante, Entreprise de Services', 'content' => 'ISVA-Innov est devenu notre partenaire incontournable pour la comptabilité. Leur maîtrise des normes OHADA révisées est un atout majeur.', 'image' => 'flexbiz/assets/img/person/person-f-1.webp'],
            ['name' => 'Jean-Paul Kabeya', 'role' => 'Directeur Général, Industrie Locale', 'content' => 'Le personnel mis à disposition par ISVA-Innov est hautement qualifié. Nous avons réduit nos coûts opérationnels tout en augmentant notre efficacité.', 'image' => 'flexbiz/assets/img/person/person-m-4.webp'],
        ];

        foreach ($testimonials as $t) {
            Testimonial::create([
                'author_name' => $t['name'],
                'author_position' => $t['role'],
                'content' => $t['content'],
                'author_photo' => $t['image'],
            ]);
        }

        // 8. Partners
        foreach (range(1, 6) as $i) {
            Partner::create([
                'name' => "Client $i",
                'logo' => "flexbiz/assets/img/clients/clients-$i.webp",
            ]);
        }

        // 9. Stats (Counters)
        $stats = [
            ['title' => 'Clients Satisfaits', 'value' => '120+', 'icon' => 'bi bi-emoji-smile'],
            ['title' => 'Missions Accomplies', 'value' => '450+', 'icon' => 'bi bi-journal-richtext'],
            ['title' => 'Assistance Conseil', 'value' => '2500', 'icon' => 'bi bi-headset'],
            ['title' => 'Collaborateurs', 'value' => '35', 'icon' => 'bi bi-people'],
        ];

        foreach ($stats as $a) {
            \App\Models\Stat::create([
                'title'       => $a['title'],
                'value'       => $a['value'],
                'icon'        => $a['icon'],
                'description' => $a['description'] ?? null,
            ]);
        }

        // 10. FAQs
        $faqs = [
            ['question' => 'Pourquoi choisir ISVA-Innov pour mon audit annuel ?', 'answer' => 'Nous offrons une expertise locale reconnue, alignée sur les standards internationaux, garantissant une indépendance totale et des recommandations à forte valeur ajoutée.'],
            ['question' => 'Proposez-vous des services de gestion de la paie ?', 'answer' => 'Oui, nous gérons l\'intégralité du cycle de paie, de la collecte des données à l\'émission des bulletins et aux déclarations sociales et fiscales.'],
            ['question' => 'Quels secteurs couvrez-vous ?', 'answer' => 'Nous intervenons dans les mines, l\'industrie, les services, le commerce et auprès des ONG en République Démocratique du Congo.'],
        ];

        foreach ($faqs as $f) {
            Faq::create([
                'question' => $f['question'],
                'answer' => $f['answer'],
            ]);
        }
    }
}
