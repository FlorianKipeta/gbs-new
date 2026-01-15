<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ProjectController extends Controller
{
    /**
     * Get the project data.
     */
    protected function getProjects(): array
    {
        return [
            'azure-properties' => [
                'title' => 'Azure Properties – Michamvi, Zanzibar',
                'year' => '2024',
                'image' => 'https://images.unsplash.com/photo-1564501049412-61c2a3083791?q=80&w=2070&auto=format&fit=crop',
                'description' => 'Comprehensive installation of Air Conditioning, Plumbing, Electrical Wiring, and CCTV systems for luxury coastal development.',
                'features' => ['Split & Central AC', 'Modern Plumbing', 'IP CCTV Systems'],
                'details' => 'This large-scale project involved the complete technical setup for a luxury coastal development in Michamvi, Zanzibar. GBS Trusted Company Limited provided end-to-end engineering solutions, ensuring that every villa and common area was equipped with high-efficiency climate control, robust plumbing infrastructure, and state-of-the-art security systems. Our team worked closely with the developers to deliver a project that meets international standards for luxury and reliability.',
                'location' => 'Michamvi, Zanzibar',
                'client' => 'Azure United Properties Ltd',
                'report' => 'GBS_Azure_Project_2024.pdf',
            ],
            'halotel-towers' => [
                'title' => 'Halotel Towers – Nationwide',
                'year' => '2023',
                'image' => 'https://images.unsplash.com/photo-1516383274235-5f42d6c6426d?q=80&w=2070&auto=format&fit=crop',
                'description' => 'Critical AC Maintenance for telecommunication hubs ensuring 100% equipment uptime in Arusha and Tanga regions.',
                'features' => ['Preventive Maint.', 'Precision Cooling', 'System Cleaning'],
                'details' => 'Maintaining telecommunication infrastructure is critical for national connectivity. GBS Trusted Company Limited was contracted to provide specialized AC maintenance for Halotel towers across the Arusha and Tanga regions. Our team focused on precision cooling systems that protect sensitive electronic equipment from overheating, implementing a rigorous preventive maintenance schedule that has resulted in zero downtime for these critical hubs.',
                'location' => 'Nationwide (Arusha, Tanga)',
                'client' => 'Viettel (Halotel) Tanzania',
                'report' => 'AC_Maintenance_Halotel_2023.pdf',
            ],
            'power-villa' => [
                'title' => 'The Power Villa – Zanzibar',
                'year' => '2022',
                'image' => 'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?q=80&w=2070&auto=format&fit=crop',
                'description' => 'High-end installation of security systems, centralized AC, and premium plumbing for international standard villas.',
                'features' => ['HD Surveillance', 'Centralized HVAC', 'Leak-proof Piping'],
                'details' => 'The Power Villa project in Zanzibar required a high level of technical expertise to match its premium positioning. We installed a fully centralized HVAC system that provides quiet and efficient cooling throughout the property. Additionally, we implemented a comprehensive HD surveillance network and a high-standard plumbing system using leak-proof piping technology to ensure long-term comfort and security for international guests.',
                'location' => 'Zanzibar',
                'client' => 'The Power 2020 Co. Ltd',
                'report' => 'GBS-Power villa project.pdf',
            ],
            'popex-hotel' => [
                'title' => 'Popex Hotel – Dar es Salaam',
                'year' => '2023',
                'image' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=2070&auto=format&fit=crop',
                'description' => 'Professional AC services and preventive maintenance to enhance system efficiency and guest satisfaction in the city.',
                'features' => ['Unit Inspection', 'Parts Replacement', 'System Optimization'],
                'details' => 'Located in the heart of Dar es Salaam, Popex Hotel relies on GBS for its complete climate control management. Our ongoing partnership involves regular unit inspections, timely parts replacement, and system optimization to ensure that guest rooms and common areas remain at the perfect temperature while minimizing energy consumption. Our work has significantly improved the hotel’s operational efficiency and guest satisfaction scores.',
                'location' => 'Dar es Salaam',
                'client' => 'Popex Hotel',
                'report' => 'GBS-Popex hotel project.pdf',
            ],
            'sky-bar-paje' => [
                'title' => 'Sky Bar Paje – Zanzibar',
                'year' => '2022',
                'image' => 'https://images.unsplash.com/photo-1533777857419-377409c1808a?q=80&w=2070&auto=format&fit=crop',
                'description' => 'Modern electrical system installation including safe wiring, power distribution, and decorative lighting for vibrant nightlife.',
                'features' => ['Main Boards', 'Decorative Lighting', 'Surge Protection'],
                'details' => 'Sky Bar in Paje, Zanzibar, required a robust and visually stunning electrical installation to support its vibrant nightlife atmosphere. GBS designed and implemented the entire electrical system, including main distribution boards, specialized decorative lighting that sets the mood, and advanced surge protection to safeguard the bar’s expensive audio-visual equipment. The project was completed on time, allowing for a successful grand opening.',
                'location' => 'Paje, Zanzibar',
                'client' => 'Sky Bar Paje',
                'report' => 'Sky_Bar_Paje_Electrical_Project_Report_2022.pdf',
            ],
        ];
    }

    /**
     * Display the specified project.
     */
    public function show(string $slug): View
    {
        $projects = $this->getProjects();

        if (! isset($projects[$slug])) {
            abort(404);
        }

        return view('projects.show', [
            'project' => $projects[$slug],
            'slug' => $slug,
        ]);
    }
}
