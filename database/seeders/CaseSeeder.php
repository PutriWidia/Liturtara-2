<?php

namespace Database\Seeders;

use App\Models\Cases;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cases::create([
            'user_id' => 1,
            'title' => 'Mobile App Development',
            'description' => 'Develop a mobile app for a fitness tracking service with real-time data synchronization.',
            'type' => 'Development',
            'level' => 'Intermediate',
            'reward_token' => 500,
            'status' => 'Available',
            'category' => 'Mobile Development, Fitness',
            'selected_talent_id' => null,
        ]);
        Cases::create([
            'user_id' => 1,
            'title' => 'Website Redesign',
            'description' => 'Redesign an e-commerce website to improve user experience and increase conversion rates.',
            'type' => 'Design',
            'level' => 'Beginner',
            'reward_token' => 300,
            'status' => 'In-progress',
            'category' => 'Web Design, E-commerce',
            'selected_talent_id' => null,
        ]);
        Cases::create([
            'user_id' => 1,
            'title' => 'Data Analysis for Marketing Campaign',
            'description' => 'Analyze customer data to identify trends and provide insights for a new marketing campaign.',
            'type' => 'Data Analysis',
            'level' => 'Advanced',
            'reward_token' => 800,
            'status' => 'Completed',
            'category' => 'Data Science, Marketing',
            'selected_talent_id' => null,
        ]);
        Cases::create([
            'user_id' => 1,
            'title' => 'Social Media Strategy',
            'description' => 'Create a comprehensive social media strategy to increase brand awareness and engagement.',
            'type' => 'Marketing',
            'level' => 'Intermediate',
            'reward_token' => 400,
            'status' => 'Sent',
            'category' => 'Social Media, Branding',
            'selected_talent_id' => null,
        ]);
        Cases::create([
            'user_id' => 1,
            'title' => 'SEO Optimization',
            'description' => 'Optimize website content and structure to improve search engine rankings and drive organic traffic.',
            'type' => 'SEO',
            'level' => 'Advanced',
            'reward_token' => 600,
            'status' => 'Cancelled',
            'category' => 'SEO, Content Marketing',
            'selected_talent_id' => null,
        ]);
        Cases::create([
            'user_id' => 1,
            'title' => 'Content Creation for Blog',
            'description' => 'Create engaging and informative blog content to attract and retain readers.',
            'type' => 'Content Writing',
            'level' => 'Beginner',
            'reward_token' => 200,
            'status' => 'Expired',
            'category' => 'Blogging, Content Marketing',
            'selected_talent_id' => null,
        ]);
    }
}
