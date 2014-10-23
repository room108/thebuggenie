<?php

	/**
	 * action components for the tracplugin module
	 */
	class tracpluginActionComponents extends TBGActionComponent
	{
        public function componentSettings()
        {
            $projects = TBGProject::getAll();
            foreach ($projects as $key => $value)
            {
                $this->projects = $projects;
            }
        }
	}

