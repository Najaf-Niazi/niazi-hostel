<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WebsiteContentItem;

class WebsiteContentItemSeeder extends Seeder
{
    public function run(): void
    {
        $items = [

            // =====================================================
            // HERO
            // =====================================================

            [
                'page' => 'home',
                'content_key' => 'home_hero_small_heading',
                'type' => 'text',
                'value' => 'MORE THAN A HOSTEL',
                'original_value' => 'MORE THAN A HOSTEL',
            ],

            [
                'page' => 'home',
                'content_key' => 'home_hero_heading_start',
                'type' => 'text',
                'value' => 'A Comfortable',
                'original_value' => 'A Comfortable',
            ],

            [
                'page' => 'home',
                'content_key' => 'home_hero_heading_highlight',
                'type' => 'text',
                'value' => 'Home',
                'original_value' => 'Home',
            ],

            [
                'page' => 'home',
                'content_key' => 'home_hero_heading_end',
                'type' => 'text',
                'value' => 'for a Brighter Tomorrow',
                'original_value' => 'for a Brighter Tomorrow',
            ],

            [
                'page' => 'home',
                'content_key' => 'home_hero_description',
                'type' => 'text',
                'value' => 'A safe, clean and peaceful living environment for students and job holders. Focus on your goals while we take care of the rest.',
                'original_value' => 'A safe, clean and peaceful living environment for students and job holders. Focus on your goals while we take care of the rest.',
            ],


            // =====================================================
            // HOME ABOUT
            // =====================================================

            [
                'page' => 'home',
                'content_key' => 'home_about_tag',
                'type' => 'text',
                'value' => 'ABOUT NIAZI HOSTEL',
                'original_value' => 'ABOUT NIAZI HOSTEL',
            ],

            [
                'page' => 'home',
                'content_key' => 'home_about_heading_start',
                'type' => 'text',
                'value' => 'A Better Place to',
                'original_value' => 'A Better Place to',
            ],

            [
                'page' => 'home',
                'content_key' => 'home_about_heading_highlight',
                'type' => 'text',
                'value' => 'Live & Grow',
                'original_value' => 'Live & Grow',
            ],

            [
                'page' => 'home',
                'content_key' => 'home_about_description',
                'type' => 'text',
                'value' => 'Niazi Hostel provides a safe, clean and comfortable living environment for students and job holders. Our goal is to provide peaceful accommodation where residents can focus on their studies, work and personal growth.',
                'original_value' => 'Niazi Hostel provides a safe, clean and comfortable living environment for students and job holders. Our goal is to provide peaceful accommodation where residents can focus on their studies, work and personal growth.',
            ],


            // =====================================================
            // HOME ABOUT IMAGES
            // =====================================================

            [
                'page' => 'home',
                'content_key' => 'home_about_main_image',
                'type' => 'image',
                'value' => 'images/hostel building.png',
                'original_value' => 'images/hostel building.png',
            ],

            [
                'page' => 'home',
                'content_key' => 'home_about_room_image',
                'type' => 'image',
                'value' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHGqFOLpGKpLIaqm0OV8bfyJAQfuhHGVVFDy692fbOA-TiESoVVFHlXUkK&s=10',
                'original_value' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHGqFOLpGKpLIaqm0OV8bfyJAQfuhHGVVFDy692fbOA-TiESoVVFHlXUkK&s=10',
            ],


            // =====================================================
            // HOME ABOUT HIGHLIGHTS
            // =====================================================

            [
                'page' => 'home',
                'content_key' => 'home_highlight_safe_title',
                'type' => 'text',
                'value' => 'Safe & Secure',
                'original_value' => 'Safe & Secure',
            ],

            [
                'page' => 'home',
                'content_key' => 'home_highlight_safe_description',
                'type' => 'text',
                'value' => 'Peaceful environment with security support.',
                'original_value' => 'Peaceful environment with security support.',
            ],

            [
                'page' => 'home',
                'content_key' => 'home_highlight_rooms_title',
                'type' => 'text',
                'value' => 'Comfortable Rooms',
                'original_value' => 'Comfortable Rooms',
            ],

            [
                'page' => 'home',
                'content_key' => 'home_highlight_rooms_description',
                'type' => 'text',
                'value' => 'Clean rooms designed for comfortable living.',
                'original_value' => 'Clean rooms designed for comfortable living.',
            ],

            [
                'page' => 'home',
                'content_key' => 'home_highlight_community_title',
                'type' => 'text',
                'value' => 'Friendly Community',
                'original_value' => 'Friendly Community',
            ],

            [
                'page' => 'home',
                'content_key' => 'home_highlight_community_description',
                'type' => 'text',
                'value' => 'A positive environment for students and workers.',
                'original_value' => 'A positive environment for students and workers.',
            ],

// =====================================================
// HOME FACILITIES
// =====================================================

[
    'page' => 'home',
    'content_key' => 'home_facilities_tag',
    'type' => 'text',
    'value' => 'OUR FACILITIES',
    'original_value' => 'OUR FACILITIES',
],

[
    'page' => 'home',
    'content_key' => 'home_facilities_heading_start',
    'type' => 'text',
    'value' => 'Everything You Need For',
    'original_value' => 'Everything You Need For',
],

[
    'page' => 'home',
    'content_key' => 'home_facilities_heading_highlight',
    'type' => 'text',
    'value' => 'Comfortable Living',
    'original_value' => 'Comfortable Living',
],

[
    'page' => 'home',
    'content_key' => 'home_facilities_description',
    'type' => 'text',
    'value' => 'From high-speed internet to round-the-clock security, Niazi Hostel provides essential facilities designed for a comfortable, safe and focused lifestyle.',
    'original_value' => 'From high-speed internet to round-the-clock security, Niazi Hostel provides essential facilities designed for a comfortable, safe and focused lifestyle.',
],


// HIGH SPEED WIFI

[
    'page' => 'home',
    'content_key' => 'home_facility_wifi_title',
    'type' => 'text',
    'value' => 'High Speed WiFi',
    'original_value' => 'High Speed WiFi',
],

[
    'page' => 'home',
    'content_key' => 'home_facility_wifi_description',
    'type' => 'text',
    'value' => 'Fast and reliable internet access for studying, work and everyday connectivity.',
    'original_value' => 'Fast and reliable internet access for studying, work and everyday connectivity.',
],


// SECURITY

[
    'page' => 'home',
    'content_key' => 'home_facility_security_title',
    'type' => 'text',
    'value' => '24/7 Security',
    'original_value' => '24/7 Security',
],

[
    'page' => 'home',
    'content_key' => 'home_facility_security_description',
    'type' => 'text',
    'value' => 'A secure hostel environment with continuous monitoring for your peace of mind.',
    'original_value' => 'A secure hostel environment with continuous monitoring for your peace of mind.',
],


// CLEAN WASHROOMS

[
    'page' => 'home',
    'content_key' => 'home_facility_washroom_title',
    'type' => 'text',
    'value' => 'Clean Washrooms',
    'original_value' => 'Clean Washrooms',
],

[
    'page' => 'home',
    'content_key' => 'home_facility_washroom_description',
    'type' => 'text',
    'value' => 'Regularly maintained and hygienic washrooms designed for comfortable daily use.',
    'original_value' => 'Regularly maintained and hygienic washrooms designed for comfortable daily use.',
],


// POWER BACKUP

[
    'page' => 'home',
    'content_key' => 'home_facility_power_title',
    'type' => 'text',
    'value' => 'Power Backup',
    'original_value' => 'Power Backup',
],

[
    'page' => 'home',
    'content_key' => 'home_facility_power_description',
    'type' => 'text',
    'value' => 'Reliable backup power to keep essential services running during electricity interruptions.',
    'original_value' => 'Reliable backup power to keep essential services running during electricity interruptions.',
],


// DRINKING WATER

[
    'page' => 'home',
    'content_key' => 'home_facility_water_title',
    'type' => 'text',
    'value' => 'Drinking Water',
    'original_value' => 'Drinking Water',
],

[
    'page' => 'home',
    'content_key' => 'home_facility_water_description',
    'type' => 'text',
    'value' => 'Clean drinking water available for residents throughout the day.',
    'original_value' => 'Clean drinking water available for residents throughout the day.',
],


// LAUNDRY

[
    'page' => 'home',
    'content_key' => 'home_facility_laundry_title',
    'type' => 'text',
    'value' => 'Laundry Facility',
    'original_value' => 'Laundry Facility',
],

[
    'page' => 'home',
    'content_key' => 'home_facility_laundry_description',
    'type' => 'text',
    'value' => 'Convenient laundry support to make everyday hostel living easier.',
    'original_value' => 'Convenient laundry support to make everyday hostel living easier.',
],
// =====================================================
// HOME BENEFITS
// =====================================================

[
    'page' => 'home',
    'content_key' => 'home_benefits_tag',
    'type' => 'text',
    'value' => 'OUR BENEFITS',
    'original_value' => 'OUR BENEFITS',
],

[
    'page' => 'home',
    'content_key' => 'home_benefits_heading_start',
    'type' => 'text',
    'value' => 'Why Choose',
    'original_value' => 'Why Choose',
],

[
    'page' => 'home',
    'content_key' => 'home_benefits_heading_highlight',
    'type' => 'text',
    'value' => 'Niazi Hostel',
    'original_value' => 'Niazi Hostel',
],

[
    'page' => 'home',
    'content_key' => 'home_benefits_description',
    'type' => 'text',
    'value' => 'A comfortable, secure and student-friendly living environment designed to make everyday hostel life easier and more focused.',
    'original_value' => 'A comfortable, secure and student-friendly living environment designed to make everyday hostel life easier and more focused.',
],


// BENEFIT 01

[
    'page' => 'home',
    'content_key' => 'home_benefit_1_title',
    'type' => 'text',
    'value' => 'Safe & Secure',
    'original_value' => 'Safe & Secure',
],

[
    'page' => 'home',
    'content_key' => 'home_benefit_1_description',
    'type' => 'text',
    'value' => 'A secure living environment designed to give students and families peace of mind.',
    'original_value' => 'A secure living environment designed to give students and families peace of mind.',
],


// BENEFIT 02

[
    'page' => 'home',
    'content_key' => 'home_benefit_2_title',
    'type' => 'text',
    'value' => 'Study Friendly',
    'original_value' => 'Study Friendly',
],

[
    'page' => 'home',
    'content_key' => 'home_benefit_2_description',
    'type' => 'text',
    'value' => 'A calm and focused atmosphere that supports learning and academic growth.',
    'original_value' => 'A calm and focused atmosphere that supports learning and academic growth.',
],


// BENEFIT 03

[
    'page' => 'home',
    'content_key' => 'home_benefit_3_title',
    'type' => 'text',
    'value' => 'Comfortable Living',
    'original_value' => 'Comfortable Living',
],

[
    'page' => 'home',
    'content_key' => 'home_benefit_3_description',
    'type' => 'text',
    'value' => 'Clean spaces and essential facilities designed for a comfortable everyday stay.',
    'original_value' => 'Clean spaces and essential facilities designed for a comfortable everyday stay.',
],


// BENEFIT 04

[
    'page' => 'home',
    'content_key' => 'home_benefit_4_title',
    'type' => 'text',
    'value' => 'Supportive Community',
    'original_value' => 'Supportive Community',
],

[
    'page' => 'home',
    'content_key' => 'home_benefit_4_description',
    'type' => 'text',
    'value' => 'A welcoming hostel community where students can live, connect and grow together.',
    'original_value' => 'A welcoming hostel community where students can live, connect and grow together.',
],
// =====================================================
// HOME REVIEWS
// =====================================================

[
    'page' => 'home',
    'content_key' => 'home_reviews_tag',
    'type' => 'text',
    'value' => 'WHAT PEOPLE SAY',
    'original_value' => 'WHAT PEOPLE SAY',
],

[
    'page' => 'home',
    'content_key' => 'home_reviews_heading_start',
    'type' => 'text',
    'value' => 'Loved By Our',
    'original_value' => 'Loved By Our',
],

[
    'page' => 'home',
    'content_key' => 'home_reviews_heading_highlight',
    'type' => 'text',
    'value' => 'Residents',
    'original_value' => 'Residents',
],

[
    'page' => 'home',
    'content_key' => 'home_reviews_description',
    'type' => 'text',
    'value' => 'Real experiences from students who call Niazi Hostel their home.',
    'original_value' => 'Real experiences from students who call Niazi Hostel their home.',
],


// REVIEW 01

[
    'page' => 'home',
    'content_key' => 'home_review_1_name',
    'type' => 'text',
    'value' => 'Rabia Draz',
    'original_value' => 'Rabia Draz',
],

[
    'page' => 'home',
    'content_key' => 'home_review_1_university',
    'type' => 'text',
    'value' => 'Superior University Lahore',
    'original_value' => 'Superior University Lahore',
],

[
    'page' => 'home',
    'content_key' => 'home_review_1_text',
    'type' => 'text',
    'value' => 'Niazi Hostel provides a comfortable and secure environment. The facilities are well maintained and the overall experience has been very positive.',
    'original_value' => 'Niazi Hostel provides a comfortable and secure environment. The facilities are well maintained and the overall experience has been very positive.',
],


// REVIEW 02

[
    'page' => 'home',
    'content_key' => 'home_review_2_name',
    'type' => 'text',
    'value' => 'Najaf Ali',
    'original_value' => 'Najaf Ali',
],

[
    'page' => 'home',
    'content_key' => 'home_review_2_university',
    'type' => 'text',
    'value' => 'Superior University Lahore',
    'original_value' => 'Superior University Lahore',
],

[
    'page' => 'home',
    'content_key' => 'home_review_2_text',
    'type' => 'text',
    'value' => 'A peaceful place for students with a good study environment, reliable facilities and helpful management.',
    'original_value' => 'A peaceful place for students with a good study environment, reliable facilities and helpful management.',
],


// REVIEW 03

[
    'page' => 'home',
    'content_key' => 'home_review_3_name',
    'type' => 'text',
    'value' => 'Asfand Niazi',
    'original_value' => 'Asfand Niazi',
],

[
    'page' => 'home',
    'content_key' => 'home_review_3_university',
    'type' => 'text',
    'value' => 'UCP',
    'original_value' => 'UCP',
],

[
    'page' => 'home',
    'content_key' => 'home_review_3_text',
    'type' => 'text',
    'value' => 'The hostel is clean, comfortable and student-friendly. It gives you a good balance between study and everyday hostel life.',
    'original_value' => 'The hostel is clean, comfortable and student-friendly. It gives you a good balance between study and everyday hostel life.',
],


// REVIEW 04

[
    'page' => 'home',
    'content_key' => 'home_review_4_name',
    'type' => 'text',
    'value' => 'Qudret Ullah',
    'original_value' => 'Qudret Ullah',
],

[
    'page' => 'home',
    'content_key' => 'home_review_4_university',
    'type' => 'text',
    'value' => 'UOL',
    'original_value' => 'UOL',
],

[
    'page' => 'home',
    'content_key' => 'home_review_4_text',
    'type' => 'text',
    'value' => 'The environment is calm and secure, and the facilities make daily life much easier for students living away from home.',
    'original_value' => 'The environment is calm and secure, and the facilities make daily life much easier for students living away from home.',
],


// REVIEW 05

[
    'page' => 'home',
    'content_key' => 'home_review_5_name',
    'type' => 'text',
    'value' => 'Furqan Faisal',
    'original_value' => 'Furqan Faisal',
],

[
    'page' => 'home',
    'content_key' => 'home_review_5_university',
    'type' => 'text',
    'value' => 'UMT',
    'original_value' => 'UMT',
],

[
    'page' => 'home',
    'content_key' => 'home_review_5_text',
    'type' => 'text',
    'value' => 'A well-managed hostel with good facilities, a supportive community and a comfortable environment for students.',
    'original_value' => 'A well-managed hostel with good facilities, a supportive community and a comfortable environment for students.',
],


// REVIEW 06

[
    'page' => 'home',
    'content_key' => 'home_review_6_name',
    'type' => 'text',
    'value' => 'Mahnoor Furqan',
    'original_value' => 'Mahnoor Furqan',
],

[
    'page' => 'home',
    'content_key' => 'home_review_6_university',
    'type' => 'text',
    'value' => 'UMT',
    'original_value' => 'UMT',
],

[
    'page' => 'home',
    'content_key' => 'home_review_6_text',
    'type' => 'text',
    'value' => 'Niazi Hostel offers a welcoming and comfortable atmosphere with the facilities students need for a smooth daily routine.',
    'original_value' => 'Niazi Hostel offers a welcoming and comfortable atmosphere with the facilities students need for a smooth daily routine.',
],
            // =====================================================
            // ROOMS SECTION
            // =====================================================

            [
                'page' => 'home',
                'content_key' => 'home_rooms_tag',
                'type' => 'text',
                'value' => 'OUR ROOMS',
                'original_value' => 'OUR ROOMS',
            ],

            [
                'page' => 'home',
                'content_key' => 'home_rooms_heading_start',
                'type' => 'text',
                'value' => 'Comfortable Rooms for',
                'original_value' => 'Comfortable Rooms for',
            ],

            [
                'page' => 'home',
                'content_key' => 'home_rooms_heading_highlight',
                'type' => 'text',
                'value' => 'Every Need',
                'original_value' => 'Every Need',
            ],


            // SINGLE ROOM
            [
                'page' => 'home',
                'content_key' => 'home_single_room_image',
                'type' => 'image',
                'value' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTznt6Uj4eoJfCJ_pk88vI1Yr51kuVdHDMJNmPJKZ4F8jhl3sCmlR06FPEh&s=10',
                'original_value' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTznt6Uj4eoJfCJ_pk88vI1Yr51kuVdHDMJNmPJKZ4F8jhl3sCmlR06FPEh&s=10',
            ],

            [
                'page' => 'home',
                'content_key' => 'home_single_room_title',
                'type' => 'text',
                'value' => 'Single Room',
                'original_value' => 'Single Room',
            ],

            [
                'page' => 'home',
                'content_key' => 'home_single_room_description',
                'type' => 'text',
                'value' => 'Perfect for focused study and peaceful living.',
                'original_value' => 'Perfect for focused study and peaceful living.',
            ],


            // DOUBLE ROOM
            [
                'page' => 'home',
                'content_key' => 'home_double_room_image',
                'type' => 'image',
                'value' => 'images/hostel2.png',
                'original_value' => 'images/hostel2.png',
            ],

            [
                'page' => 'home',
                'content_key' => 'home_double_room_title',
                'type' => 'text',
                'value' => 'Double Sharing',
                'original_value' => 'Double Sharing',
            ],

            [
                'page' => 'home',
                'content_key' => 'home_double_room_description',
                'type' => 'text',
                'value' => 'Comfortable and affordable for two residents.',
                'original_value' => 'Comfortable and affordable for two residents.',
            ],


            // TRIPLE ROOM
            [
                'page' => 'home',
                'content_key' => 'home_triple_room_image',
                'type' => 'image',
                'value' => 'images/hostel3.png',
                'original_value' => 'images/hostel3.png',
            ],

            [
                'page' => 'home',
                'content_key' => 'home_triple_room_title',
                'type' => 'text',
                'value' => 'Triple Sharing',
                'original_value' => 'Triple Sharing',
            ],

            [
                'page' => 'home',
                'content_key' => 'home_triple_room_description',
                'type' => 'text',
                'value' => 'Spacious shared room with a friendly atmosphere.',
                'original_value' => 'Spacious shared room with a friendly atmosphere.',
            ],


           // =====================================================
// ADMISSION CTA
// =====================================================

[
    'page' => 'home',
    'content_key' => 'home_cta_tag',
    'type' => 'text',
    'value' => 'READY TO JOIN?',
    'original_value' => 'READY TO JOIN?',
],

[
    'page' => 'home',
    'content_key' => 'home_cta_heading',
    'type' => 'text',
    'value' => 'Apply for New Admission',
    'original_value' => 'Apply for New Admission',
],

[
    'page' => 'home',
    'content_key' => 'home_cta_description',
    'type' => 'text',
    'value' => 'Fill out the admission form and submit your application to Niazi Hostel.',
    'original_value' => 'Fill out the admission form and submit your application to Niazi Hostel.',
],
// =====================================================
// ADMISSION CTA
// =====================================================

[
    'page' => 'home',
    'content_key' => 'home_cta_tag',
    'type' => 'text',
    'value' => 'ADMISSIONS OPEN',
    'original_value' => 'ADMISSIONS OPEN',
],

[
    'page' => 'home',
    'content_key' => 'home_cta_heading_start',
    'type' => 'text',
    'value' => 'Start Your',
    'original_value' => 'Start Your',
],

[
    'page' => 'home',
    'content_key' => 'home_cta_heading_highlight',
    'type' => 'text',
    'value' => 'New Journey',
    'original_value' => 'New Journey',
],

[
    'page' => 'home',
    'content_key' => 'home_cta_heading_end',
    'type' => 'text',
    'value' => 'at Niazi Hostel',
    'original_value' => 'at Niazi Hostel',
],

[
    'page' => 'home',
    'content_key' => 'home_cta_description',
    'type' => 'text',
    'value' => 'Fill out the admission form and become a part of a safe, comfortable and study-friendly environment. Limited seats available for new admissions.',
    'original_value' => 'Fill out the admission form and become a part of a safe, comfortable and study-friendly environment. Limited seats available for new admissions.',
],


// CTA LEFT BENEFIT 01

[
    'page' => 'home',
    'content_key' => 'home_cta_benefit_1_title',
    'type' => 'text',
    'value' => 'Safe & Secure',
    'original_value' => 'Safe & Secure',
],

[
    'page' => 'home',
    'content_key' => 'home_cta_benefit_1_text',
    'type' => 'text',
    'value' => 'Environment',
    'original_value' => 'Environment',
],


// CTA LEFT BENEFIT 02

[
    'page' => 'home',
    'content_key' => 'home_cta_benefit_2_title',
    'type' => 'text',
    'value' => 'Supportive',
    'original_value' => 'Supportive',
],

[
    'page' => 'home',
    'content_key' => 'home_cta_benefit_2_text',
    'type' => 'text',
    'value' => 'Community',
    'original_value' => 'Community',
],


// CTA LEFT BENEFIT 03

[
    'page' => 'home',
    'content_key' => 'home_cta_benefit_3_title',
    'type' => 'text',
    'value' => 'Study',
    'original_value' => 'Study',
],

[
    'page' => 'home',
    'content_key' => 'home_cta_benefit_3_text',
    'type' => 'text',
    'value' => 'Friendly',
    'original_value' => 'Friendly',
],


// CTA LEFT BENEFIT 04

[
    'page' => 'home',
    'content_key' => 'home_cta_benefit_4_title',
    'type' => 'text',
    'value' => 'Comfortable',
    'original_value' => 'Comfortable',
],

[
    'page' => 'home',
    'content_key' => 'home_cta_benefit_4_text',
    'type' => 'text',
    'value' => 'Stay',
    'original_value' => 'Stay',
],


// HAPPY STUDENTS BADGE

[
    'page' => 'home',
    'content_key' => 'home_cta_happy_number',
    'type' => 'text',
    'value' => '1000+',
    'original_value' => '1000+',
],

[
    'page' => 'home',
    'content_key' => 'home_cta_happy_text',
    'type' => 'text',
    'value' => 'Happy Students',
    'original_value' => 'Happy Students',
],


// RIGHT PANEL

[
    'page' => 'home',
    'content_key' => 'home_cta_limited_text',
    'type' => 'text',
    'value' => 'LIMITED SEATS',
    'original_value' => 'LIMITED SEATS',
],

[
    'page' => 'home',
    'content_key' => 'home_cta_apply_text',
    'type' => 'text',
    'value' => 'Apply Now',
    'original_value' => 'Apply Now',
],


// CTA PROCESS POINTS

[
    'page' => 'home',
    'content_key' => 'home_cta_process_1',
    'type' => 'text',
    'value' => 'Simple Online Form',
    'original_value' => 'Simple Online Form',
],

[
    'page' => 'home',
    'content_key' => 'home_cta_process_2',
    'type' => 'text',
    'value' => 'Quick Processing',
    'original_value' => 'Quick Processing',
],

[
    'page' => 'home',
    'content_key' => 'home_cta_process_3',
    'type' => 'text',
    'value' => 'Secure & Confidential',
    'original_value' => 'Secure & Confidential',
],

[
    'page' => 'home',
    'content_key' => 'home_cta_process_4',
    'type' => 'text',
    'value' => 'Hassle Free Admission',
    'original_value' => 'Hassle Free Admission',
],
            // =====================================================
            // FOOTER
            // =====================================================

            [
                'page' => 'home',
                'content_key' => 'footer_description',
                'type' => 'text',
                'value' => 'Safe, clean and comfortable hostel accommodation for students and job holders.',
                'original_value' => 'Safe, clean and comfortable hostel accommodation for students and job holders.',
            ],

            [
                'page' => 'home',
                'content_key' => 'footer_phone',
                'type' => 'text',
                'value' => '+92 3261446249',
                'original_value' => '+92 3261446249',
            ],

            [
                'page' => 'home',
                'content_key' => 'footer_email',
                'type' => 'text',
                'value' => 'niazihostel234@.com',
                'original_value' => 'niazihostel234@.com',
            ],

            [
                'page' => 'home',
                'content_key' => 'footer_address',
                'type' => 'text',
                'value' => 'Mianwali, Pakistan',
                'original_value' => 'Mianwali, Pakistan',
            ],

        ];


        foreach ($items as $item) {

            WebsiteContentItem::updateOrCreate(
                [
                    'content_key' => $item['content_key']
                ],
                $item
            );

        }
    }
}