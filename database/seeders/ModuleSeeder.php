<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table(table: 'modules')->insert(values: [
            [
                'id'        => 1,
                'title'     => 'What is Offensive Security?',
                'description' => "This is the core of 'Offensive Security.' It involves breaking into computer systems, exploiting software bugs, and finding loopholes in applications to gain unauthorized access. The goal is to understand hacker tactics and enhance our system defences.",
                'link_content' => 'https://www.ibm.com/topics/offensive-security',
                'course_id' => 1,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 2,
                'title'     => 'Hacking your first machine',
                'description' => "You will be guided through hacking your first website in a legal and safe environment.",
                'link_content' => 'https://tryhackme.com/r/room/offensivesecurityintro',
                'course_id' => 2,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 3,
                'title'     => 'Careers in cyber security',
                'description' => "This is the core of 'Offensive Security.' It involves breaking into computer systems, exploiting software bugs, and finding loopholes in applications to gain unauthorized access. The goal is to understand hacker tactics and enhance our system defences.",
                'link_content' => 'https://www.coursera.org/articles/cybersecurity-jobs',
                'course_id' => 1,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 4,
                'title'     => 'Introduction to Defensive Security',
                'description' => "Defensive cyber security focuses on building and maintaining resilient systems that prevent, detect, and respond to threats primarily after an incident occurs.",
                'link_content' => 'https://www.cyberacademy.id/blog/mengenal-defensive-security',
                'course_id' => 2,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 5,
                'title'     => 'Areas of Defensive Security',
                'description' => "Security Operations Center (SOC), where cover Threat Intelligence.",
                'link_content' => 'https://secureguardservices.com/blog/what-are-the-4-levels-of-security/',
                'course_id' => 2,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 6,
                'title'     => 'Practical Example of Defensive Security',
                'description' => "Let us pretend you are a Security Operations Center (SOC) analyst responsible for protecting a bank. ",
                'link_content' => 'https://www.ibm.com/topics/security-operations-center',
                'course_id' => 2,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 7,
                'title'     => 'Practical Example of Defensive Security',
                'description' => "Let us pretend you are a Security Operations Center (SOC) analyst responsible for protecting a bank. ",
                'link_content' => 'https://www.ibm.com/topics/security-operations-center',
                'course_id' => 2,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 8,
                'title'     => 'Security Analyst',
                'description' => "Security analysts are integral to constructing security measures across organisations to protect the company from attacks.",
                'link_content' => 'https://cybersn.com/role/security-analyst/',
                'course_id' => 3,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 9,
                'title'     => 'Security Engineer',
                'description' => "Security engineers develop and implement security solutions using threats and vulnerability data - often sourced from members of the security workforce.",
                'link_content' => 'https://uk.indeed.com/career-advice/finding-a-job/what-does-security-engineer-do',
                'course_id' => 3,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 10,
                'title'     => 'Incident Responder',
                'description' => "Incident responders respond productively and efficiently to security breaches. Responsibilities include creating plans, policies, and protocols for organisations to enact during and following incidents.",
                'link_content' => 'https://www.crowdstrike.com/en-us/cybersecurity-101/next-gen-siem/incident-responder/',
                'course_id' => 3,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 11,
                'title'     => 'Digital Forensics Examiner',
                'description' => "If you are working as part of a law-enforcement department, you would be focused on collecting and analysing evidence to help solve crimes: charging the guilty and exonerating the innocent.",
                'link_content' => 'https://fbijobs.gov/sites/default/files/2023-04/career_digitalforensicexaminer.pdf',
                'course_id' => 3,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 12,
                'title'     => 'Malware Analyst',
                'description' => "A malware analyst's work involves analysing suspicious programs, discovering what they do and writing reports about their findings.",
                'link_content' => 'https://online.utulsa.edu/blog/malware-analyst-career-overview/',
                'course_id' => 3,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 13,
                'title'     => 'Penetration Tester',
                'description' => "A penetration tester's job role is to test the security of the systems and software within a company - this is achieved through attempts to uncover flaws and vulnerabilities through systemised hacking.",
                'link_content' => 'https://www.blackduck.com/glossary/what-is-penetration-testing.html',
                'course_id' => 3,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 14,
                'title'     => 'Red teamer',
                'description' => "Red teamers share similarities to penetration testers, with a more targeted job role.",
                'link_content' => 'https://www.zimperium.com/glossary/red-teamer/',
                'course_id' => 3,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 15,
                'title'     => 'What is Networking?',
                'description' => "Networks come in all shapes and sizes, which is something that we will also come on to discuss throughout this module.",
                'link_content' => 'https://www.careereducation.columbia.edu/resources/what-networking-and-why-do-you-need-do-it',
                'course_id' => 4,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 16,
                'title'     => 'What is Internet?',
                'description' => "The Internet is made up of many small networks all joined together.",
                'link_content' => 'https://www.britannica.com/technology/Internet',
                'course_id' => 4,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 17,
                'title'     => 'Identifying Devices on a Network',
                'description' => "To communicate and maintain order, devices must be both identifying and identifiable on a network.",
                'link_content' => 'https://www.solarwinds.com/resources/it-glossary/network-device-identification',
                'course_id' => 4,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
        ]);
    }
}
