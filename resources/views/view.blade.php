@extends('layouts.hub')
@include('partials.head',['title' => 'View Data'])

<div class="man-bar">
    <livewire:man-button :title="'Generate Data'" :action="'generateData'"/>
    <livewire:man-button :title="'Reset All'" :action="'resetAll()'"/>
    <livewire:man-button :title="'delete Mode'" :action="'deleteMode()'"/>
    <livewire:man-button :title="'update Mode'" :action="'updateMode()'"/>
</div>

<div class="view">
    <livewire:view-table :title="'Familles'" :table="$Fmodel"/>
    <livewire:man-form :title="'Add Famille'" :table="$Fmodel" />
</div>
<div class="view">
    <livewire:view-table :title="'Articles'" :table="$Amodel"/>
    <livewire:man-form :title="'Add Famille'" :table="$Amodel" />
</div>


