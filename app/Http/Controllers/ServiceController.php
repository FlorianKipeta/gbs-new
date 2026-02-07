<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ServiceController extends Controller
{
    /**
     * Get the service data.
     */
    protected function getServices(): array
    {
        return [
            'ac-installation' => [
                'title' => 'AC Installation Services',
                'icon' => 'fas fa-fan',
                'image' => asset('images/gbs-images/gbs-trusted-company-limited-15.jpeg'),
                'description' => 'Professional AC installation and replacement for homes, industries, and commercial buildings in Tanzania.',
                'summary' => 'We provide expert installation for all types of air conditioning systems, from residential split units to large-scale industrial HVAC systems.',
                'details' => 'At GBS Trusted Company Limited, we understand that a proper installation is the foundation of a long-lasting and efficient cooling system. Our team of certified technicians handles everything from initial site assessment and load calculations to the final testing and commissioning. We specialize in high-efficiency units from leading brands, ensuring you get the best performance for your investment. Whether you are building a new home or upgrading an industrial facility, our installation services are designed to meet your specific technical requirements and comfort needs.',
                'benefits' => [
                    'Energy Efficient Solutions',
                    'Expert Load Calculations',
                    'Ductwork Design & Installation',
                    'Post-Installation Support',
                    'Certified Technicians',
                ],
            ],
            'ac-repair' => [
                'title' => 'Fast AC Repair Services',
                'icon' => 'fas fa-tools',
                'image' => asset('images/gbs-images/gbs-trusted-company-limited-16.jpeg'),
                'description' => 'Reliable and fast AC repair services available 24/7 across Dar es Salaam and Zanzibar.',
                'summary' => 'Our expert technicians diagnose and fix AC problems quickly to restore your comfort with minimal downtime.',
                'details' => 'When your air conditioning breaks down in the Tanzanian heat, you need a response you can trust. GBS provides 24/7 emergency repair services for all types of cooling equipment. Our technicians arrive equipped with specialized diagnostic tools to identify the root cause of the failure, whether it is a compressor issue, refrigerant leak, electrical fault, or sensor malfunction. we prioritize transparency, providing a clear explanation of the problem and an accurate quote before any work begins. We use genuine spare parts to ensure the longevity of our repairs.',
                'benefits' => [
                    '24/7 Emergency Support',
                    'Same-Day Service Availability',
                    'Genuine Spare Parts',
                    'Specialized Diagnostic Tools',
                    'Workmanship Guarantee',
                ],
            ],
            'ac-maintenance' => [
                'title' => 'Preventive AC Maintenance',
                'icon' => 'fas fa-sync',
                'image' => asset('images/gbs-images/gbs-trusted-company-limited-17.jpeg'),
                'description' => 'Comprehensive AC maintenance programs to extend equipment life and improve energy efficiency.',
                'summary' => 'Regular maintenance prevents costly breakdowns and keeps your system running at peak performance.',
                'details' => 'Preventive maintenance is the key to avoiding unexpected system failures and high energy bills. Our maintenance programs at GBS include thorough cleaning of coils and filters, refrigerant level checks, electrical connection tightening, and overall system optimization. We offer tailored maintenance contracts for both residential properties and large commercial buildings, providing scheduled visits that ensure your equipment operates within its designed parameters year-round. A well-maintained AC system not only lasts longer but also provides better indoor air quality for your family or employees.',
                'benefits' => [
                    'Reduced Energy Consumption',
                    'Extended Equipment Lifespan',
                    'Improved Air Quality',
                    'Priority Scheduling for Contracts',
                    'Detailed Inspection Reports',
                ],
            ],
            'plumbing-services' => [
                'title' => 'Expert Plumbing Solutions',
                'icon' => 'fas fa-faucet',
                'image' => asset('images/gbs-images/gbs-trusted-company-limited-18.jpeg'),
                'description' => 'Certified plumbing services for residential, commercial, and industrial areas in Tanzania.',
                'summary' => 'From leak repairs to complete piping installations, our plumbers deliver reliable and durable water solutions.',
                'details' => 'GBS offers a full range of plumbing services handled by certified professionals. We specialize in modern piping installations, sewer and drain cleaning, water heater services, and leak detection. Our approach combines traditional plumbing skills with modern technology to ensure leak-proof and efficient water distribution systems. We understand the unique plumbing challenges in Dar es Salaam and Zanzibar, and we provide solutions that are built to withstand local conditions. Whether it is a simple home repair or a complex industrial setup, we guarantee quality workmanship and professional service.',
                'benefits' => [
                    'Leak-Proof Piping Technology',
                    '24/7 Emergency Plumbing',
                    'Sewer & Drain Management',
                    'Water Pressure Optimization',
                    'High-Quality Materials',
                ],
            ],
            'electrical-services' => [
                'title' => 'Professional Electrical Services',
                'icon' => 'fas fa-bolt',
                'image' => asset('images/gbs-images/gbs-trusted-company-limited-19.jpeg'),
                'description' => 'Qualified and licensed electrical technicians for design, installation, and maintenance.',
                'summary' => 'Safe and compliant electrical systems for your peace of mind, from home wiring to industrial power distribution.',
                'details' => 'Electrical safety is non-negotiable. At GBS Trusted Company Limited, our licensed electricians provide comprehensive services including internal and external wiring, power distribution board installation, surge protection, and electrical maintenance. We work on projects of all scales, from individual residential properties to large industrial facilities. Our team ensures that every installation complies with international safety standards and local regulations. We also provide specialized services like energy audits and power quality analysis to help you optimize your electrical consumption and protect your valuable equipment from power surges.',
                'benefits' => [
                    'Safety Standard Compliance',
                    'Industrial Power Distribution',
                    'Surge Protection Systems',
                    'Electrical Fault Diagnosis',
                    'Energy Efficiency Audits',
                ],
            ],
            'cctv-security' => [
                'title' => 'CCTV & Advanced Security',
                'icon' => 'fas fa-video',
                'image' => asset('images/gbs-images/gbs-trusted-company-limited-21.jpeg'),
                'description' => 'Professional CCTV installation and security system design using leading international brands.',
                'summary' => 'Protect your assets with our state-of-the-art surveillance and access control solutions.',
                'details' => 'Security is a top priority for any property owner. GBS provides turnkey security solutions that include the design, planning, and installation of advanced CCTV systems. We work with leading international brands like Hikvision, Dahua, and Bosch to provide high-definition surveillance that you can monitor from anywhere. Our services also include access control systems, intrusion alarms, and integrated security management. Our security experts conduct a thorough risk assessment of your property to design a system that covers all vulnerable points, providing you with 24/7 peace of mind and clear evidence when needed.',
                'benefits' => [
                    'HD Surveillance Systems',
                    'Remote Mobile Monitoring',
                    'Access Control Integration',
                    'Intrusion Detection Alarms',
                    'Professional Risk Assessment',
                ],
            ],
            'electric-fencing' => [
                'title' => 'Electric Fencing Solutions',
                'icon' => 'fas fa-shield-alt',
                'image' => asset('images/gbs-images/gbs-trusted-company-limited-22.jpeg'),
                'description' => 'Strong perimeter security barriers with high-voltage pulses for durable protection.',
                'summary' => 'Our electric fencing provides a powerful physical and psychological deterrent against intruders.',
                'details' => 'Perimeter security starts with a strong barrier. Our electric fencing solutions provide a high-voltage pulse that is safe but acts as a powerful deterrent. We install durable, energy-efficient fencing systems that are integrated with intrusion detection alarms. If anyone attempts to tamper with or cut the fence, an alarm is triggered immediately. Our systems are designed to be cost-effective and low-maintenance while providing maximum security for residential estates, commercial warehouses, and industrial zones. We ensure all installations are compliant with local security regulations.',
                'benefits' => [
                    'Intrusion Detection Alarms',
                    'High-Voltage Deterrence',
                    'Battery Backup Systems',
                    'Durable Weatherproof Components',
                    'Compliance with Regulations',
                ],
            ],
            'solar-installation' => [
                'title' => 'Solar Power Installation',
                'icon' => 'fas fa-solar-panel',
                'image' => asset('images/gbs-images/gbs-trusted-company-limited-23.jpeg'),
                'description' => 'Sustainable energy solutions with high-quality solar power systems for homes and businesses.',
                'summary' => 'Harness the power of the sun to reduce your energy costs and embrace sustainable technology.',
                'details' => 'With the abundance of sunlight in Tanzania, solar power is the most sustainable and cost-effective energy solution. GBS designs and installs high-quality solar power systems tailored to your specific needs, whether you want to go completely off-grid or reduce your reliance on the national grid. Our services include solar panel installation, inverter and battery storage setup, and solar water heating systems. We use high-efficiency components that are built to last in the local climate, providing you with a reliable source of clean energy and significantly reducing your long-term electricity expenses.',
                'benefits' => [
                    'Significant Energy Savings',
                    'Clean Sustainable Energy',
                    'Battery Storage Solutions',
                    'Solar Water Heating',
                    'Low Maintenance Costs',
                ],
            ],
        ];
    }

    /**
     * Display the specified service.
     */
    public function show(string $slug): View
    {
        $services = $this->getServices();

        if (! isset($services[$slug])) {
            abort(404);
        }

        return view('services.show', [
            'service' => $services[$slug],
            'slug' => $slug,
        ]);
    }
}
